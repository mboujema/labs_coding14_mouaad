<?php

namespace App\Http\Controllers;

use App\Models\Navbar;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $navbars = Navbar::all();
        $users = User::all();
        return view("home", compact("users", "navbars"));
    }
}
