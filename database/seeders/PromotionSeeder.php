<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('promotions')->insert([
            "title" => "Salam ça va mon shab",
            "stitle" => "Lorem kwd chekem salle bette type",
            "button" => "blog",
        ]);
    }
}
