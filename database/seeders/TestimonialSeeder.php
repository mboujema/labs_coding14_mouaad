<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("testimonials")->insert([
            "name" => "Ilyasse El haddad",
            "title" => "Balance",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
            "path" => "/avatar/02.jpg",
        ]);
        DB::table("testimonials")->insert([
            "name" => "Ilyasse El haddad",
            "title" => "Balance",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
            "path" => "/avatar/02.jpg",
        ]);
        DB::table("testimonials")->insert([
            "name" => "Ilyasse El haddad",
            "title" => "Balance",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
            "path" => "/avatar/02.jpg",
        ]);
        DB::table("testimonials")->insert([
            "name" => "Ilyasse El haddad",
            "title" => "Balance",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
            "path" => "/avatar/02.jpg",
        ]);
        DB::table("testimonials")->insert([
            "name" => "Ilyasse El haddad",
            "title" => "Balance",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
            "path" => "/avatar/02.jpg",
        ]);
        DB::table("testimonials")->insert([
            "name" => "Ilyasse El haddad",
            "title" => "Balance",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
            "path" => "/avatar/02.jpg",
        ]);
    }
}
