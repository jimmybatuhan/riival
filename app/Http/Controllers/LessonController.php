<?php

namespace App\Http\Controllers;

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

        $videoUri = "/videos/487576791";
        
        $videoData = Vimeo::request($videoUri, [], 'GET');

        //pull out the vimeo video id
        $videoDuration = $videoData['body']['duration'];
        $videoId = str_replace("/videos/", "", $videoUri);

        $lesson = Lesson::create([
            'course_id' => $request->course_id,
            'title' => $request->title,
            'description' => $request->description,
            'duration' => $videoDuration,
            'video_id' => $videoId,
            'video_link' => "",
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

    public function show(Lesson $lesson): JsonResponse
    {
        return response()->json($lesson);
    }
}
