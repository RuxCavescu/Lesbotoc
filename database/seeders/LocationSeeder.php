<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Location;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations = [
        [
            'id' => 1,
            'name' => 'Q Cafe',
            'address' => 'Opatovická 12, Praha 1. 110 00',
            'latitude' => '',
            'longtitude' => '',
            'location_website' => '',
        ],

        [
            'id' => 2,
            'name' => 'Apartmány Na Kopečku',
            'address' => 'Čistá v Krkonoších 206, Černý Důl, 543 44',
            'latitude' => '',
            'longtitude' => '',
            'location_website' => '',
        ],

        [
            'id' => 3,
            'name' => 'Pohořelec',
            'address' => '',
            'latitude' => '',
            'longtitude' => '',
            'location_website' => '',
        ],

        [
            'id' => 4,
            'name' => 'Grill point 1',
            'address' => 'Stromovka grill point 2',
            'latitude' => '',
            'longtitude' => '',
            'location_website' => '',
        ],

        [
            'id' => 5,
            'name' => 'Patra',
            'address' => 'Krymská 286/17, Vršovice, 101 00',
            'latitude' => '',
            'longtitude' => '',
            'location_website' => '',
        ],

        [
            'id' => 6,
            'name' => 'Prague village',
            'address' => 'Střelecký ostrov, Prague 1, 110 00',
            'latitude' => '',
            'longtitude' => '',
            'location_website' => '',
        ],

        [
            'id' => 7,
            'name' => 'Bowling v Továrně',
            'address' => 'Vlastislavova 603, Praha 4, 140 00',
            'latitude' => '',
            'longtitude' => '',
            'location_website' => '',
        ],
];

        foreach ($locations as $location) {
            Location::create($location);
        }
    }
}
