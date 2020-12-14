<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use App\Http\Requests\TagRequest;
use App\Models\Course;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    const COURSE_PER_PAGE = 5;

    public function index(Request $request): JsonResponse
    {
        $keyword = $request->keyword;
        $courses = Course::where('is_active', true)
            ->when($keyword, function ($query) use ($keyword) {
                return $query->where("title", "LIKE", "%$keyword%");
            })
            ->with('coachProfile')
            ->simplePaginate(self::COURSE_PER_PAGE);

        return response()->json($courses);
    }

    public function store(CourseRequest $request): JsonResponse
    {
        $course = Course::create([
            'title' => $request->title,
            'description' => $request->description,
            'language' => $request->language,
            'thumbnail_url' => $request->thumbnail_url,
            'coach_profile_id' => $request->coach_profile_id,
        ]);

        return response()->json();
    }

    public function update(CourseRequest $request, Course $course): JsonResponse
    {
        $course->update($request->input());

        return response()->json();
    }

    public function destroy(Course $course): JsonResponse
    {
        $course->delete();

        return response()->json();
    }

    public function updateTags(TagRequest $request, Course $course): JsonResponse
    {
        $course->tags()->detach($course->tags);

        $course->tags()->attach($request->tags);

        return response()->json();
    }

    public function create()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
}
