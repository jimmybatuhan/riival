<?php

namespace App\Http\Controllers;

use App\Http\Requests\LessonRequest;
use App\Http\Requests\TagRequest;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\JsonResponse;
use Vimeo\Laravel\Facades\Vimeo;
use Illuminate\Support\Str;

class LessonController extends Controller
{
    public function store(LessonRequest $request, Course $course): JsonResponse
    {
        $video_uri = Vimeo::upload($request->video, [
            'name' => $request->title,
            'description' => $request->description,
        ]);

        Lesson::create([
            'course_id' => $course->id,
            'title' => $request->title,
            'description' => $request->description,
            'video_id' => str_replace("/videos/", '', $video_uri),
        ]);

        return response()->json();
    }

    public function update(LessonRequest $request, Lesson $lesson): JsonResponse
    {
        $lesson->update($request->input());

        return response()->json();
    }

    public function destroy(Lesson $lesson): JsonResponse
    {
        $lesson->delete();

        return response()->json();
    }

    public function updateTags(TagRequest $request, Lesson $lesson): JsonResponse
    {
        $lesson->tags()->detach($lesson->tags);

        $lesson->tags()->attach($request->tags);

        return response()->json();
    }

    public function show(Lesson $lesson): JsonResponse
    {
        return response()->json($lesson);
    }

    public function getNewest(): JsonResponse
    {
        $limit = request()->count ?? 3;
        $lessons = Lesson
            ::where('is_playable', true)
            ->limit($limit)
            ->oldest()
            ->get()
            ->map(fn (Lesson $lesson) => [
                'coach' => $lesson->course->coachProfile->in_game_name,
                'course_id' => $lesson->course->id,
                'course_title' => $lesson->course->title,
                'description' => $lesson->description,
                'duration' => $lesson->duration,
                'game_title' => $lesson->course->coachProfile->game->name,
                'game_id' => $lesson->course->coachProfile->game->id,
                'lesson_id' => $lesson->id,
                'link' => $lesson->video_link,
                'title' =>  $lesson->title,
                'video_id' => $lesson->video_id,
                'video_timestamp' => $lesson->video_duration,
            ]);

        return response()->json($lessons);
    }
}
