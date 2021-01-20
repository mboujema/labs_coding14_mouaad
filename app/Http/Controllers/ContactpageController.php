<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Map;
use Illuminate\Http\Request;

class ContactpageController extends Controller
{
    public function index() 
    {
        $contact = Contact::first();
        $map = Map::all();
        return view("contact", compact("contact","map"));
    }
}
