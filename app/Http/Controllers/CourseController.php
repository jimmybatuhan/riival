<?php

namespace App\Http\Controllers;

use App\Models\CoachProfile;
use App\Models\Game;
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

    public function store(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
