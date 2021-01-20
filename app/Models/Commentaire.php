<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;

    protected $fillable = [
        "description",
        "user_id",
        "article_id",

        
    ];

    public  function  users()

    {

        return  $this->belongsTo(User::class, "user_id", "id");

    }

    public  function  articles()

    {

        return  $this->hasMany(Article::class);

    }



}
