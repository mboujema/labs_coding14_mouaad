<?php

namespace App\Http\Controllers;

use App\Models\testi_Title;
use App\Models\Testimonial;
use App\Models\testiTitle;
use App\Models\Title;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        $titles = Title::all();
        
        return view("backend.testimonials.table",compact("testimonials","titles"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backend.testimonials.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $testimonial = new Testimonial();
        $request->validate([
            "name" => "required",
            "title" => 'required',
            "description" => 'required',
            "path" => 'required',
            
        ]);

        $testimonial->name = $request->name;
        $testimonial->title = $request->title;
        $testimonial->description = $request->description;
        
        
        $testimonial->path = $request->file("path")->hashName();
        $request->file("path")->storePublicly("img", "public");
        

        $testimonial->save();
        return redirect()->route("testimonial.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view("backend.testimonials.edit", compact("testimonial"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            "name" => "required",
            "title" => 'required',
            "description" => 'required',
            "path" => 'required',
            
        ]);

        $testimonial->name = $request->name;
        $testimonial->title = $request->title;
        $testimonial->description = $request->description;
        
        $testimonial->path = $request->file("path")->hashName();
        $request->file("path")->storePublicly("img", "public");
        

        $testimonial->save();
        return redirect()->route("testimonial.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        Storage::disk("public")->delete("img/"  .  $testimonial->path);
        $testimonial->delete();
        return redirect()->back();
    }
}
