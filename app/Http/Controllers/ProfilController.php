<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view("profile", compact("users"));
    }

    public function update(Request $request, User $users)
    {
        $request->validate([
            "path" => 'required',
            
        ]);
        
        $users->path = $request->file("path")->hashName();
        $request->file("path")->storePublicly("img", "public");
        

        $users->save();
        return redirect()->route("users.index");
    }
}
