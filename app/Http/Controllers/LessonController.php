<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\LessonRequest;
use App\Http\Requests\TagRequest;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\JsonResponse;
use Vimeo;

class LessonController extends Controller
{
    public function index()
    {
        // Not sure if this will be needed, TBD..
    }

    public function store(LessonRequest $request): JsonResponse
    {
        $course = Course::findOrFail($request->course_id);

        $videoUri = Vimeo::upload($request->video, array(
            "name" => $request->title
        ));

        $videoData = Vimeo::request($videoUri, array(), 'GET');

        //pull out the vimeo player link from the embed string
        $videoEmbedLink = $videoData['body']['embed']['html'];
        preg_match('/(src=["\'](.*?)["\'])/', $videoEmbedLink, $match);
        $split = preg_split('/["\']/', $match[0]);
        $videoLink = $split[1];

        $lesson = Lesson::create([
            'course_id' => $request->course_id,
            'title' => $request->title,
            'description' => $request->description,
            'duration' => $request->duration,
            'video_link' => $videoLink
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

    public function edit(Lesson $lesson)
    {
        //
    }

    public function create()
    {
        //
    }

    public function show(Lesson $lesson)
    {
        //temporary link for videos
        $lesson->video_link = "https://player.vimeo.com/video/487576791?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=194487";

        return response()->json($lesson);
    }
}
