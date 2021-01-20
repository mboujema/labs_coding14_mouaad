<?php

namespace App\Http\Controllers;

use App\Models\Banniere;
use App\Models\Slogan;
use Illuminate\Http\Request;

class SloganController extends Controller
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
        return view("backend.banniere.table", compact("slogans", "bannieres"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slogan  $slogan
     * @return \Illuminate\Http\Response
     */
    public function show(Slogan $slogan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slogan  $slogan
     * @return \Illuminate\Http\Response
     */
    public function edit(Slogan $slogan)
    {
        return view("backend.banniere.editslogan", compact("slogan"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slogan  $slogan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slogan $slogan)
    {
        $request->validate([
            "slogan" => "required",
        ]);
        
        $slogan->slogan = $request->slogan;

        $slogan->save();
        return redirect()->route("slogan.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slogan  $slogan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slogan $slogan)
    {
        //
    }
}
