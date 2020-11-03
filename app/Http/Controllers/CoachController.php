<?php

namespace App\Http\Controllers;

use App\Http\Requests\CoachRequest;
use App\Http\Requests\TagRequest;
use App\Models\Coach;
use App\Models\CoachProfile;
use App\Models\Game;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CoachController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $keyword = $request->keyword;
        $coaches = Coach::with("coach_profiles")->when($keyword, function ($query) use ($keyword) {
            return $query->where("coach_profiles.in_game_name", "LIKE", "%${$keyword}%")
                ->orWhere("first_name", "LIKE", "%${$keyword}%")
                ->orWhere("last_name", "LIKE", "%${$keyword}%");
        });
        return response()->json($coaches);
    }

    public function store(CoachRequest $request): JsonResponse
    {
        $game = Game::findOrFail($request->game_id);
        $coach = Coach::create([
            "country" => $request->country,
            "first_name" => $request->first_name,
            "language" => $request->language,
            "last_name" => $request->last_name,
        ]);

        CoachProfile::create([
            'coach_id' => $coach->id,
            'game_id' => $game->id,
            'in_game_name' => $request->in_game_name,
        ]);

        return response()->json();
    }

    public function update(CoachRequest $request, Coach $coach): JsonResponse
    {
        DB::transaction(function () use ($request, $coach) {
            $coach->first_name = $request->first_name;
            $coach->last_name = $request->last_name;
            $coach->language = $request->language;
            $coach->country = $request->country;
            $coach->save();

            $game_profile = $coach->gameProfile($request->game_id);
            $game_profile->in_game_name = $request->in_game_name;
            $game_profile->save();
        });

        return response()->json();
    }

    public function destroy(Coach $coach): JsonResponse
    {
        $coach->delete();
        $coach->gameProfiles->delete();

        return response()->json();
    }

    public function updateTags(TagRequest $request, Coach $coach): JsonResponse
    {
        $coach_profile = $coach->gameProfile($request->game_id);

        $coach_profile->tags()->detach($coach_profile->tags);

        $coach_profile->tags()->attach($request->tags);

        return response()->json();
    }

    public function create()
    {
        //
    }

    public function show(Coach $coach)
    {
        //
    }

    public function edit(Coach $coach)
    {
        //
    }
}
