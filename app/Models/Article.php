<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'path',
        'date',
        'title',
        "description",
        "user_id",
        "verification_id",
        
    ];

    protected $table = "articles";

    public  function  users()

    {

        return  $this->belongsTo(User::class, "user_id", "id");


    }

    public  function  commentaires()

    {

        return  $this->hasMany(Commentaire::class);

    }

    public function categories() {
        return $this->belongsToMany(Categorie::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }

    public  function  verifications()

    {
        return  $this->belongsTo(Verification::class, "verification_id", "id");
    }
}
