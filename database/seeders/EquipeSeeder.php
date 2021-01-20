<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("equipes")->insert([
            "path" => "/team/1.jpg",
            "name" => "Christinne Williams",
            "job" => "JUNIOR DEVELOPER",

        ]);
        DB::table("equipes")->insert([
            "path" => "/team/2.jpg",
            "name" => "Christinne Williams",
            "job" => "CEO COMPANY",

        ]);
        DB::table("equipes")->insert([
            "path" => "/team/3.jpg",
            "name" => "Christinne Williams",
            "job" => "DIGITAL DESIGNER",

        ]);
    }
}
