<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::all();
        return view('teams.index', ['teams' => $teams]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teams.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'fed_number' => 'required|unique:teams|max:10',
            'name' => 'required|max:255',
            'city' => 'required|max:50'
        ]);
        $team = new Team();
        $team->fed_number = $request->input('fed_number');
        $team->name = $request->input('name');
        $team->city= $request->input('city');
        $team->save();
        return view('teams.message', ['msg' => "Registro guardado"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $team = Team::find($id);
        return view('teams.edit', ['team' => $team]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'fed_number' => 'required|max:10|unique:teams,fed_number,' . $id,
            'name' => 'required|max:255',
            'city' => 'required|max:50'
        ]);
        $team = Team::find($id);
        $team->fed_number = $request->input('fed_number');
        $team->name = $request->input('name');
        $team->city= $request->input('city');
        $team->save();
        return view('teams.message', ['msg' => "Registro actualizado"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $team = Team::find($id);
        $team->delete();
        return redirect("teams");
    }
}
