<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Image;
use DB;


class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()  //public\images\bbq\bbq_coal.jpg
    {
        DB::table('images')->truncate();

        $images = [
            [
                "id" => "1",
                "alt" => "notebook and pen on a table",
                "path" => "/images/lesbotoc_photos/lesbotoc_preparation.jpg",

            ],
            [
                "id" => "2",
                "alt" => "bbq fire",
                "path" => "/images/bbq/bbq_fire.jpg",
            ],
            [
                "id" => "3",
                "alt" => "skewer on a bbq",
                "path" => "/images/bbq/bbq_skewer.jpg",
            ],
            [
                "id" => "4",
                "alt" => "vegetarian bbq",
                "path" => "/images/bbq/bbq_veg.jpg",
            ],
            [
                "id" => "5",
                "alt" => "display of food",
                "path" => "/images/bbq/food.jpg",
            ],
            [
                "id" => "6",
                "alt" => "two women sitting on the gras",
                "path" => "/images/lesbotoc_photos/speed_dating_outdoor.JPG",
            ],
            [
                "id" => "7",
                "alt" => "four people sitting on two tables",
                "path" => "/images/lesbotoc_photos/speed_dating.JPG",
            ],
            [
                "id" => "8",
                "alt" => "four women sitting on tables and another using a gong",
                "path" => "/images/lesbotoc_photos/speed_dating1.JPG",
            ],
            [
                "id" => "9",
                "alt" => "women sitting on tables, talking",
                "path" => "/images/lesbotoc_photos/speed_dating2.JPG",
            ],
            [
                "id" => "10",
                "alt" => "two women sitting on a table, talking",
                "path" => "/images/lesbotoc_photos/speed_dating3.JPG",
            ],
            [
                "id" => "11",
                "alt" => "team lesbotoc - 3 women",
                "path" => "/images/lesbotoc_photos/Team1.JPG",
            ],
            [
                "id" => "12",
                "alt" => "team lesbotoc - 3 women",
                "path" => "/images/lesbotoc_photos/Team2.JPG",
            ],
            [
                "id" => "13",
                "alt" => "two women outside in winter, drinking something",
                "path" => "/images/lesbotoc_photos/tour_svarak.JPG",
            ],
            [
                "id" => "14",
                "alt" => "two women outside in winter, drinking something",
                "path" => "/images/lesbotoc_photos/tour_svarak2.JPG",
            ],
            [
                "id" => "15",
                "alt" => "Prague in the afternoon",
                "path" => "/images/praha/praha_afternoon.jpg",
            ],
            [
                "id" => "16",
                "alt" => "Prague Charles Bridge at night",
                "path" => "/images/praha/praha_charles_bridge.jpg",
            ],
            [
                "id" => "17",
                "alt" => "Prague at night",
                "path" => "/images/praha/praha_night.jpg",
            ],
            [
                "id" => "18",
                "alt" => "Prague Vysehrad",
                "path" => "/images/praha/vysehrad.jpg",
            ],
            [
                "id" => "19",
                "alt" => "rainbow flag on street light",
                "path" => "/images/pride/praha_pride_flag.jpg",
            ],
            [
                "id" => "20",
                "alt" => "people on the street for pride parade",
                "path" => "/images/pride/pride_parade.jpg",
            ],
            [
                "id" => "21",
                "alt" => "two glasses of mulled wine on a wooden plate",
                "path" => "/images/winter/mulled_wine.jpg",
            ],
            [
                "id" => "22",
                "alt" => "two women holding hands, standing on gras",
                "path" => "/images/women/holding_hands.jpg",
            ],
            [
                "id" => "23",
                "alt" => "showing open hand where is written I said yes",
                "path" => "/images/women/jsme_fair.jpg",
            ],
            [
                "id" => "24",
                "alt" => "rainbow umbrella in group of people",
                "path" => "/images/women/rainbow_umbrella.jpg",
            ],
            [
                "id" => "25",
                "alt" => "two women on the beach with fireworks",
                "path" => "/images/women/two_women.jpg",
            ], [
                "id" => "26",
                "alt" => "two fingers with heart",
                "path" => "/images/women/women_funny.jpg",
            ],
            [
                "id" => "27",
                "alt" => "two women as pedestrian traffic lights",
                "path" => "/images/women/women_traffic_lights.jpg",
            ],
            [
                "id" => "28",
                "alt" => "woman reading a book while drinking tea",
                "path" => "/images/book_woman.jpg",
            ],
            [
                "id" => "29",
                "alt" => "people drinking around the fire",
                "path" => "/images/camp.jpg",
            ],
            [
                "id" => "30",
                "alt" => "friends playing card game",
                "path" => "/images/board_game.jpg",
            ],
            [
                "id" => "31",
                "alt" => "image of colorful bowling balls",
                "path" => "/images/bowling.jpg",
            ],
            [
                "id" => "32",
                "alt" => "picture of halloween carved pumpkins on leaves",
                "path" => "/images/halloween.jpg",
            ],
            [
                "id" => "33",
                "alt" => "people drinking beer",
                "path" => "/images/beer.jpg",
            ],
            [
                "id" => "34",
                "alt" => "Crowds in pub playing games",
                "path" => "/images/pub_quiz.jpg",
            ],

        ];
        foreach ($images as $image) {
            Image::create($image);
        }
    }
}
