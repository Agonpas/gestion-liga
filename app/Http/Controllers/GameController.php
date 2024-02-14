<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Team;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game::all();
        return view('games.index', ['games' => $games]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teams = Team::all();
        return view('games.create', compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'home_team_id' => [
                'required',
                Rule::unique('games', 'home_team_id')->where(function ($query) use ($request) {
                    return $query->where('away_team_id', $request->away_team_id);
                }),
            ],
            'away_team_id' => 'required|different:home_team_id',
            'home_goals' => 'required|integer|min:0',
            'away_goals' => 'required|integer|min:0',
        ]);
        $game = new Game();
        $game->home_team_id = $request->input('home_team_id');
        $game->away_team_id = $request->input('away_team_id');
        $game->home_goals = $request->input('home_goals');
        $game->away_goals = $request->input('away_goals');
        $game->save();
        return view('games.message', ['msg' => "Registro de partido guardado"]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $game = Game::find($id);
        $teams = Team::all();
        return view('games.edit', compact('game', 'teams'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'home_team_id' => 'required|different:away_team_id',
            'away_team_id' => 'required|different:home_team_id',
            'home_goals' => 'required|integer|min:0',
            'away_goals' => 'required|integer|min:0',
        ]);
        $game = Game::find($id);
        $game->home_team_id = $request->input('home_team_id');
        $game->away_team_id = $request->input('away_team_id');
        $game->home_goals = $request->input('home_goals');
        $game->away_goals = $request->input('away_goals');
        $game->save();
        return view('games.message', ['msg' => "Registro de partido actualizado"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $game = Game::find($id);
        $game->delete();
        return redirect("games");
    }
}
