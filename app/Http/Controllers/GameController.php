<?php

namespace App\Http\Controllers;

use App\Http\Requests\GameRequest;
use App\Models\Game;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $keyword = $request->keyword;

        $games = Game::when($keyword, function($query) use ($keyword) {
            return $query->where("name", "LIKE", "%${$keyword}%");
        });

        return response()->json($games);
    }

    public function create()
    {
        //
    }

    public function show(Game $game)
    {
        //
    }

    public function edit(Game $game)
    {
        //
    }

    public function store(GameRequest $request): JsonResponse
    {
        Game::create([
            'name' => $request->name,
        ]);

        return response()->json();
    }

    public function update(GameRequest $request, Game $game): JsonResponse
    {
        $game->update($request->input());

        return response()->json();
    }

    public function destroy(Game $game): JsonResponse
    {
        $game->delete();

        return response()->json();
    }
}
