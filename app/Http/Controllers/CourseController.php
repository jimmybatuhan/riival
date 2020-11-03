<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use App\Models\CoachProfile;
use App\Models\Course;
use App\Models\Game;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $coaches = CoachProfile::when($request->coach_id, function ($query) use ($request) {
            return $query->where("coach_id", $request->coach_id);
        })
        ->when($request->game, function ($query) use ($request) {
            $game = Game::getGameByName($request->game);
            return $query->where("game_id", $game->id);
        })
        ->get();

        return response()->json($coaches->courses);
    }

    public function store(CourseRequest $request, CoachProfile $coach_profile): JsonResponse
    {
        $course = Course::create([
            'title' => $request->title,
            'description' => $request->description,
            'language' => $request->language,
        ]);

        $coach_profile->courses()->attch($course);

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
    public function show($id)
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
