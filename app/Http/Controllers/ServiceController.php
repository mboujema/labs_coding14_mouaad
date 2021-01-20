<?php

namespace App\Http\Controllers;

use App\Models\Cardrapid;
use App\Models\Contact;
use App\Models\Newsletter;
use App\Models\primet;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ServiceController extends Controller
{
    public function index() 
    {
        $contact = Contact::first();
        $primet = primet::first();
        $str = Str::of($primet->title)->replace('(', '<span>');
        $str2 = Str::of($str)->replace(')', '</span>');
        $cardrapids = Cardrapid::all();
        $newsletters = Newsletter::all();
        return view("service", compact("contact","primet","str","str2","cardrapids","newsletters"));
    }
}
