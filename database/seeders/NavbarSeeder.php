<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navbars')->insert([
            "path" => "/logo.png",
            "navbar1" => "home",
            "navbar2" => "service",
            "navbar3" => "blog",
            "navbar4" => "contact",

        ]);
    }
}
