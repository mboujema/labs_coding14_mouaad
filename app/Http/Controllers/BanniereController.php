<?php

namespace App\Http\Controllers;

use App\Models\Banniere;
use App\Models\Slogan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BanniereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slogans = Slogan::all();
        $bannieres = Banniere::all();
        return view("backend.banniere.table", compact("bannieres", "slogans"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backend.banniere.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $banniere = new Banniere();
        $request->validate([
            "path" => "required",
        ]);
        
        $banniere->path = $request->file("path")->hashName();
        $request->file("path")->storePublicly("img", "public");

        $banniere->save();
        return redirect()->route("banniere.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banniere  $banniere
     * @return \Illuminate\Http\Response
     */
    public function show(Banniere $banniere)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banniere  $banniere
     * @return \Illuminate\Http\Response
     */
    public function edit(Banniere $banniere)
    {
        return view("backend.banniere.edit", compact("banniere"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banniere  $banniere
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banniere $banniere)
    {
        $request->validate([
            "path" => "required",
        ]);
        $banniere->path = $request->file("path")->hashName();
        $request->file("path")->storePublicly("img", "public");

        $banniere->save();
        return redirect()->route("banniere.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banniere  $banniere
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banniere $banniere)
    {
        Storage::disk("public")->delete("img/"  .  $banniere->path);
        $banniere->delete();
        return redirect()->back();
    }
}
