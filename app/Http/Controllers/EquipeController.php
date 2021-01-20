<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipes = Equipe::all();
        $teams = Team::all();
        return view("backend.teams.table", compact("equipes","teams"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backend.teams.createequipe");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $equipe = new Equipe();
        $request->validate([
            "path" => "required",
            "name" => 'required',
            "job" => 'required',

        ]);
        
        $equipe->path = $request->file("path")->hashName();
        $request->file("path")->storePublicly("img", "public");
        $equipe->name = $request->name;
        $equipe->job = $request->job;

        $equipe->save();
        return redirect()->route("equipe.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function show(Equipe $equipe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipe $equipe)
    {
        return view("backend.teams.editequipe", compact("equipe"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipe $equipe)
    {
        $request->validate([
            "path" => "required",
            "name" => 'required',
            "job" => 'required',

        ]);

        $equipe->path = $request->file("path")->hashName();
        $request->file("path")->storePublicly("img", "public");
        $equipe->name = $request->name;
        $equipe->job = $request->job;
        
        $equipe->save();
        return redirect()->route("equipe.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipe $equipe)
    {
        // Storage::disk("public")->delete("img/"  .  $equipe->path);
        $equipe->delete();
        return redirect()->back();
    }
}
