<?php

namespace App\Jobs;

use App\Constants\App;
use App\Models\Lesson;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Symfony\Component\HttpFoundation\Response;
use Vimeo\Laravel\Facades\Vimeo;

class VimeoStatusUpdater implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function handle()
    {
        $lessons = Lesson
            ::where('video_status', '!=', 'available')
            ->where('is_playable', false)
            ->where('video_update_attempt', '<', App::LESSON_MAXIMUM_UPDATE_ATTEMPT)
            ->orWhere('video_data_response_http_status', Response::HTTP_TOO_MANY_REQUESTS)
            ->take(App::LESSONS_TO_UPDATE_CHUNK_SIZE)
            ->get();

        $lessons->each(function (Lesson $lesson) {
            $video_data = Vimeo::request("/videos/{$lesson->video_id}" , [], 'GET');
            $status = $video_data['status'];

            if ($status === Response::HTTP_OK) {
                $lesson->is_playable = $video_data['body']['is_playable'];
                $lesson->duration = $video_data['body']['duration'];
                $lesson->video_status = $video_data['body']['status'];
            }

            $lesson->video_update_attempt = $lesson->video_update_attempt + 1;
            $lesson->video_data_response_http_status = $status;
            $lesson->save();
        });
    }
}
