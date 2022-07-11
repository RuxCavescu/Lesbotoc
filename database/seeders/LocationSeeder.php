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
            'latitude' => '50.07961315279516',
            'longtitude' => '14.417323782717663',
            'location_website' => 'http://q-cafe.cz/',
        ],

         
        [
            'id' => 2,
            'name' => 'Apartmány Na Kopečku',
            'address' => 'Čistá v Krkonoších 206, Černý Důl, 543 44',
            'latitude' => '50.61554597924833',
            'longtitude' => '15.705976298075266',
            'location_website' => 'https://www.booking.com/hotel/cz/na-kopecku-apartman-1.cs.html',
        ],

        
        [
            'id' => 3,
            'name' => 'Pohořelec',
            'address' => '',
            'latitude' => '50.0879856170408',
            'longtitude' => '14.3887232557258',
            'location_website' => '',
        ],

    
        [
            'id' => 4,
            'name' => 'Grill point 2',
            'address' => 'Královská obora, Bubeneč, 170 00 Praha 7',
            'latitude' => '50.11080147857537',
            'longtitude' => '14.417530337231272',
            'location_website' => 'https://www.navystavisti.cz/kam-za-jidlem/griloviste/',
        ],


    
        [
            'id' => 5,
            'name' => 'Patra',
            'address' => 'Krymská 286/17, Vršovice, 101 00',
            'latitude' => '50.071706163073294',
            'longtitude' => '14.44826469897069',
            'location_website' => 'https://www.facebook.com/patrakrymska/',
        ],


        [
            'id' => 6,
            'name' => 'Prague village',
            'address' => 'Střelecký ostrov, Prague 1, 110 00',
            'latitude' => '50.08761118207686',
            'longtitude' => '14.388814758522996',
            'location_website' => '',
        ],

        [
            'id' => 7,
            'name' => 'Bowling v Továrně',
            'address' => 'Vlastislavova 603, Praha 4, 140 00',
            'latitude' => '50.06477727598958',
            'longtitude' => '14.442607286409972',
            'location_website' => 'https://bowlingvtovarne.cz/',
        ],
];

        foreach ($locations as $location) {
            Location::create($location);
        }
    }
}


// Use following : name & address in q parameter 

// <iframe src="https://maps.google.com/maps?&q=Bowling v Továrně Vlastislavova 603, Praha 4, 140 00&output=embed" width="450" height="270" frameborder="0" style="border:0"></iframe>

