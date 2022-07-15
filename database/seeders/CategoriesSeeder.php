<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                "id" => 1,
                "name_en" => "Movies",
                "name_cz" => "Filmy"
            ],
            [
                "id" => 2,
                "name_en" => "Concerts",
                "name_cz" => "Koncerty"
            ],
            [
                "id" => 3,
                "name_en" => "Festivals",
                "name_cz" => "Festivaly"
            ],
            [
                "id" => 4,
                "name_en" => "Games",
                "name_cz" => "Hry"
            ],
            [
                "id" => 5,
                "name_en" => "Camps",
                "name_cz" => "Kempy"
            ],
            [
                "id" => 6,
                "name_en" => "Holidays",
                "name_cz" => "Dovolena"
            ],
            [
                "id" => 7,
                "name_en" => "Walks & hiking",
                "name_cz" => "Vylety"
            ],
            [
                "id" => 8,
                "name_en" => "Picnics & BBQ",
                "name_cz" => "Pikniky & BBQ"
            ],
            [
                "id" => 9,
                "name_en" => "Party",
                "name_cz" => "Party"
            ],
            [
                "id" => 10,
                "name_en" => "Music",
                "name_cz" => "Hudba"
            ],
            [
                "id" => 11,
                "name_en" => "Literature",
                "name_cz" => "Literatura"
            ],
            [
                "id" => 12,
                "name_en" => "Dating",
                "name_cz" => "Dating"


            ],
            [
                "id" => 13,
                "name_en" => "TBD",
                "name_cz" => "TBD"

            ]

        ];
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
