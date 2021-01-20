<?php

namespace App\Http\Controllers;

use App\Models\Cardrapid;
use App\Models\Newsletter;
use App\Notifications\ArticlePublished;
use Illuminate\Http\Request;

class CardrapidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cardrapids = Cardrapid::all();
        return view("backend.cardrapids.table", compact("cardrapids"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cardrapids = Cardrapid::all();
        return view("backend.cardrapids.create", compact("cardrapids"));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cardrapid = new Cardrapid();
        $request->validate([
            "font" => "required",
            "title" => 'required',
            "description" => 'required',
        ]);
        
        $cardrapid->font = $request->font;
        $cardrapid->title = $request->title;
        $cardrapid->description = $request->description;

        

        $cardrapid->save();
        return redirect()->route("cardrapid.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cardrapid  $cardrapid
     * @return \Illuminate\Http\Response
     */
    public function show(Cardrapid $cardrapid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cardrapid  $cardrapid
     * @return \Illuminate\Http\Response
     */
    public function edit(Cardrapid $cardrapid)
    {
        return view("backend.cardrapids.edit", compact("cardrapid"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cardrapid  $cardrapid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cardrapid $cardrapid)
    {
        $request->validate([
            "font" => "required",
            "title" => 'required',
            "description" => 'required',
        ]);
        
        $cardrapid->font = $request->font;
        $cardrapid->title = $request->title;
        $cardrapid->description = $request->description;

        $cardrapid->save();
        return redirect()->route("cardrapid.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cardrapid  $cardrapid
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cardrapid $cardrapid)
    {
        $cardrapid->delete();
        return redirect()->back();
    }
}
