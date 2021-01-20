<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            "name" => "Sport",
            
        ]);
        DB::table('categories')->insert([
            "name" => "Jeux video",
            
        ]);
        DB::table('categories')->insert([
            "name" => "News",
            
        ]);
        DB::table('categories')->insert([
            "name" => "musique",
            
        ]);
        DB::table('categories')->insert([
            "name" => "science",
            
        ]);
        DB::table('categories')->insert([
            "name" => "+18",
            
        ]);
    }
}
