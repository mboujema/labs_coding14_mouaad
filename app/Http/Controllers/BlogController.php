<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Commentaire;
use App\Models\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() 
    {
        $article = Article::paginate(3, ["*"], "article");
        return view("blog", compact("article"));
    }

    public function show(Article $article, $id) 
    {
        $show = Article::find($id);
        $users = User::find($id);
        $commentaires = Commentaire::find($id);
        return view("blog-post", compact("article", "show","users","commentaires"));
    }
}
