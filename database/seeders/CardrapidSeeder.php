<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardrapidSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cardrapids')->insert([
            "font" => "flaticon-015-book",
            "title" => "1",
            "description" => "test test test test test test dfdf dfdfdf dfdfdfd fddfdf dfdfdf dffdfdf dfdf",

        ]);
        DB::table('cardrapids')->insert([
            "font" => "flaticon-016-vision",
            "title" => "2",
            "description" => "test test test test test test dfdf dfdfdf dfdfdfd fddfdf dfdfdf dffdfdf dfdf",

        ]);
        DB::table('cardrapids')->insert([
            "font" => "flaticon-017-notebook",
            "title" => "3",
            "description" => "test test test test test test dfdf dfdfdf dfdfdfd fddfdf dfdfdf dffdfdf dfdf",

        ]);
        DB::table('cardrapids')->insert([
            "font" => "flaticon-017-notebook",
            "title" => "4",
            "description" => "test test test test test test dfdf dfdfdf dfdfdfd fddfdf dfdfdf dffdfdf dfdf",

        ]);
        DB::table('cardrapids')->insert([
            "font" => "flaticon-017-notebook",
            "title" => "5",
            "description" => "test test test test test test dfdf dfdfdf dfdfdfd fddfdf dfdfdf dffdfdf dfdf",

        ]);
        DB::table('cardrapids')->insert([
            "font" => "flaticon-017-notebook",
            "title" => "6",
            "description" => "test test test test test test dfdf dfdfdf dfdfdfd fddfdf dfdfdf dffdfdf dfdf",

        ]);
        DB::table('cardrapids')->insert([
            "font" => "flaticon-017-notebook",
            "title" => "7",
            "description" => "test test test test test test dfdf dfdfdf dfdfdfd fddfdf dfdfdf dffdfdf dfdf",

        ]);
        DB::table('cardrapids')->insert([
            "font" => "flaticon-017-notebook",
            "title" => "8",
            "description" => "test test test test test test dfdf dfdfdf dfdfdfd fddfdf dfdfdf dffdfdf dfdf",

        ]);
        DB::table('cardrapids')->insert([
            "font" => "flaticon-017-notebook",
            "title" => "9",
            "description" => "test test test test test test dfdf dfdfdf dfdfdfd fddfdf dfdfdf dffdfdf dfdf",

        ]);
        DB::table('cardrapids')->insert([
            "font" => "flaticon-017-notebook",
            "title" => "10",
            "description" => "test test test test test test dfdf dfdfdf dfdfdfd fddfdf dfdfdf dffdfdf dfdf",

        ]);
        DB::table('cardrapids')->insert([
            "font" => "flaticon-017-notebook",
            "title" => "11",
            "description" => "test test test test test test dfdf dfdfdf ",

        ]);
        DB::table('cardrapids')->insert([
            "font" => "flaticon-017-notebook",
            "title" => "12",
            "description" => "test test test test test test dfdf ",

        ]);
        DB::table('cardrapids')->insert([
            "font" => "flaticon-017-notebook",
            "title" => "13",
            "description" => "test test test test test test ",

        ]);
    }
}