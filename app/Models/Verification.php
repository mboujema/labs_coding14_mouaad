<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verification extends Model
{
    use HasFactory;

    protected  $fillable = [
        "name"
    ];

    protected  $table = "verifications";


    public function articles()
    {
        return $this->hasMany(article::class);
    }
}
