<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banniere;
use App\Models\Cardrapid;
use App\Models\Contact;
use App\Models\Equipe;
use App\Models\Navbar;
use App\Models\Promotion;
use App\Models\Slogan;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\Testimonialt;
use App\Models\TestimonialTitle;
use App\Models\Title;
use App\Models\User;
use App\Models\Video;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $navbars = Navbar::all();
        $bannieres = Banniere::all();
        $slogans = Slogan::all();
        $cardrapids = Cardrapid::paginate(9, ["*"], "cardrapids");
        $about = About::first();
        $str = Str::of($about->title)->replace('(', '<span>');
        $str2 = Str::of($str)->replace(')', '</span>');
        $videos = Video::all();
        $title = Title::all();
        $testimonial = Testimonial::all();
        $team = Team::first();
        $str3 = Str::of($team->title)->replace('(', '<span>');
        $str4 = Str::of($str3)->replace(')', '</span>');
        $equipe = Equipe::inRandomOrder()->get();
        $stop = 1;
        $id = 0;
        $promotion = Promotion::first();
        $contact = Contact::first();
        $users = User::inRandomOrder()->get();
        return view("welcome", compact("navbars","bannieres","slogans", "cardrapids", "about","str","str2","videos", "title","testimonial","str3","str4","equipe", "stop", "id","promotion","contact","users"));
    }
}
