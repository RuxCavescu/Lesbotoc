<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;
use DB;
use Carbon\Carbon;





class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      DB::table('events')->truncate();
     
      $events = [
        [
            'title_en' => 'Book Club',
            'title_cz' => 'Knižní klub',
            // changed for testing to June, return back to sept
            'start_date' => Carbon::create('2022', '09', '27'),
            // 'start_date' => Carbon::create('2022', '09', '27'),
            'end_date' => null,
            'time' => Carbon::parse('09:00:00'),
            'location_id' => 1, //Q Cafe - address: Opatovická 12, Praha 1
            'is_paid' => false,
            'price' => null,
            'qr_code_image' => '',
            'category_id' => 11,
            'description_cz' => '',
            'description_en' => 'The Book club is an event where we talk about a book we are curretly reading. We choose the book during the previews book club and then we have a whole month to read it. Sometimes we are inviting the author to join us and discuss with us. Sam Xabyssus and Anna Musilová accepted the invitation already.',
            'instructions_cz' => 'Národní třída - Tram 2, 9, 18, 22, Metro B. Myslíkova - tram 2, 5.',
            'instructions_en' => 'Národní třída - Tram 2, 9, 18, 22, Metro B. Myslíkova - tram 2, 5.',
            'is_recurring' => true, //1 per month
            // 'is_active' => true,
           'is_featured'=> true,
            'capacity' => 30,
            "is_phone_required" => false, 
            "image_id" => 28,
            // "already_registered" => null
        ],
        [
          'title_en' => 'Camp',
          'title_cz' => 'Tábor',
          // changed for testing to June, return back to July
          'start_date' => Carbon::create('2022', '08', '22'),
          // 'start_date' => Carbon::create('2022', '07', '22'),
          'end_date' => Carbon::create('2022', '07', '24'),
          'time' => Carbon::parse('19:00:00'),
          'location_id' => 2, // Apartmány Na Kopečku - address: Čistá v Krkonoších 206, 543 44 Černý Důl
          'is_paid' => true,
          'price' => 1800,
          'qr_code_image' => '',
          'category_id' => 5,
          'description_cz' => '',
          'description_en' => 'The Camp is a 3 days get away usually in Krkonoše mountains. During these days participants can look forward to games prepared by Lesbotoč, walks, evening grill parties and lots of fun.',
          'instructions_cz' => '',
          'instructions_en' => '',
          'is_recurring' => true, //1 per year
          // 'is_active' => true,
         'is_featured'=> false,
          'capacity' => 15,
          "is_phone_required" => true,
          "image_id" => 29,
          // "already_registered" => null
      ],
      [
        'title_en' => 'Tour de Svařák',
        'title_cz' => 'Tour de Svařák',
        'start_date' => Carbon::create('2022', '12', '17'),
        'end_date' => null,
        'time' => Carbon::parse('15:00:00'),
        'location_id' => 3, // Pohořelec
        'is_paid' => false,
        'price' => null,
        'qr_code_image' => '',
        'category_id' => 7,
        'description_cz' => '',
        'description_en' => 'Lets enjoy the Christmas atmosphere in Prague while walking around Prague\'s most famous places with a cup of hot wine. During the walk we will stop in several spots marked on the map. Time schedule of each stop will be updated later. You can join us at any stop.',
        'instructions_cz' => 'Tram 22',
        'instructions_en' => 'Tram 22',
        'is_recurring' => true, //1 per year
        // 'is_active' => true,
       'is_featured'=> false,
        'capacity' => 20,
        "is_phone_required" => false,
        "image_id" => 13,
        // "already_registered" => null
    ],
    [
      'title_en' => 'Grilling with Lesbotoč',
      'title_cz' => 'Grilovačka s Lesbotočem',


      'start_date' => Carbon::create('2022', '11', '30'),
      'end_date' => null,
      'time' => Carbon::parse('17:00:00'),
      

      'location_id' => 4, // Stromovka grill point 2
      'is_paid' => false,
      'price' => null,
      'qr_code_image' => '',
      'category_id' => 8,
      'description_cz' => '',
      'description_en' => 'This event is organized as a potluck, we are grilling whatever participants bring.',
      'instructions_cz' => 'Výstaviště - Tram 6, 12, 17',
      'instructions_en' => 'Výstaviště - Tram 6, 12, 17',
      'is_recurring' => true, //1 per year
      // 'is_active' => true,
     'is_featured'=> false,
      'capacity' => 10,
      "is_phone_required" => false,
      "image_id" => 3
      // "already_registered" => null
  ],
  [
    'title_cz' => 'Deskovky',
    'title_en' => 'Board games',

    'start_date' => Carbon::create('2022', '09', '21'),
    'end_date' => null,
    'time' => Carbon::parse('19:00:00'),

    'location_id' => 5, // Patra - address: Krymská 286/17, Vršovice, 101 00
    'is_paid' => false,
    'price' => null,
    'qr_code_image' => '',
    'category_id' => 4,
    'description_cz' => '',
    'description_en' => 'Great way to meet new people by playing Board games like Osadníci z Katanu, Dominion, Uno, Koncept and more.',
    'instructions_cz' => 'Krymská - Tram 4, 12, 22; Bus - 135',
    'instructions_en' => 'Krymská - Tram 4, 12, 22; Bus - 135',
    'is_recurring' => true, //1 per year
    // 'is_active' => true,
   'is_featured'=> false,
    'capacity' => null,
    "is_phone_required" => false,
    "image_id" => 30,
    
    // "already_registered" => null
],
[
  'title_cz' => 'Speed Dating',
  'title_en' => 'Speed Dating',

  'start_date' => Carbon::create('2022', '08', '09'),
  'end_date' => null,
  'time' => Carbon::parse('19:00:00'),

  'location_id' => 6, // Prague village - Střelecký ostrov
  'is_paid' => true,
  'price' => null, // voluntary
  'qr_code_image' => '',
  'category_id' => 12,
  'description_cz' => '',
  'description_en' => 'From 16:00 - lesbians 18-25, from 17:00 - lesbians 26 - 35, from 18:00 - lesbians 36 - 45. "Speed dating is a unique way how to meet up to 11 other women. During 4 minutes long date. How does it all work? 
  Attendees get a mark and a recording card, people get paired up with eachother and after the sound signal, the date starts. After 4 minutes the date ends and a new pairing is created, this happens until all people get their date. When all dates are over, we collect the recording cards and check the matches. Everyone gets the contact information of the people the matched with via SMS.',
  'instructions_cz' => 'Národní divadlo - tram - 2, 9, 18, 22. Újezd - 9, 12, 15, 20, 22.',
  'instructions_en' => 'Národní divadlo - tram - 2, 9, 18, 22. Újezd - 9, 12, 15, 20, 22.',
  'is_recurring' => true, //4 times per year
  // 'is_active' => true,
 'is_featured'=> false,
  'capacity' => 36,
  "is_phone_required" => true,
  "image_id" => 8,
  // "already_registered" => null
],
[
  'title_cz' => 'Bowling a Pool',
  'title_en' => 'Bowling a Pool',
  'start_date' => Carbon::create('2022', '10', '26'),
  'end_date' => null,
  'time' => null,
  'location_id' => 7, // Bowling v Továrně - address: Vlastislavova 603, 140 00 Praha 4
  'is_paid' => true,
  'price' => null, // depending on price of the lines
  'qr_code_image' => '',
  'category_id' => 4,
  'description_cz' => '',
  'description_en' => '',
  'instructions_cz' => 'Náměstí bratří Synků - tram - 11, 14, 18, 19, 24; bus 193',
  'instructions_en' => 'Náměstí bratří Synků - tram - 11, 14, 18, 19, 24; bus 193',
  'is_recurring' => true, //1 per year
  // 'is_active' => true,
 'is_featured'=> false,
  'capacity' => null,
  "is_phone_required" => false,
  "image_id" => 31,
  // "already_registered" => null
],
[
  'title_cz' => 'Halloween',
  'title_en' => 'Halloween',
  'start_date' => Carbon::create('2022', '10', '30'),
  'end_date' => null,
  'time' => null,
  'location_id' => 8, // To be determined
  'is_paid' => true,
  'price' => null, // voluntary
  'qr_code_image' => '',
  'category_id' => 6,
  'description_cz' => '',
  'description_en' => '',
  'instructions_cz' => 'Náměstí bratří Synků - tram - 11, 14, 18, 19, 24; bus 193',
  'instructions_en' => 'Náměstí bratří Synků - tram - 11, 14, 18, 19, 24; bus 193',
  'is_recurring' => true, //1 per year
  // 'is_active' => true,
 'is_featured'=> false,
  'capacity' => null,
  "is_phone_required" => false,
  "image_id" => 32,
  // "already_registered" => null
],
[
  'title_cz' => 'Na pivo s Lesbotočem',
  'title_en' => 'Beer with Lesbotoč',
  'start_date' => Carbon::create('2023', '01', '25'),
  'end_date' => null,
  'time' => null,
  'location_id' => 5, // Patra - address: Krymská 286/17, Vršovice, 101 00
  'is_paid' => false,
  'price' => null,
  'qr_code_image' => '',
  'category_id' => 9,
  'description_cz' => '',
  'description_en' => '',
  'instructions_cz' => 'Krymská - Tram 4, 12, 22; Bus - 135',
  'instructions_en' => 'Krymská - Tram 4, 12, 22; Bus - 135',
  'is_recurring' => true, //1 per year
  // 'is_active' => true,
 'is_featured'=> false,
  'capacity' => null,
  "is_phone_required" => false,
  "image_id" => 33,
  // "already_registered" => null
],
[
  'title_cz' => 'Hudební kvíz',
  'title_en' => 'Music Quiz',
  'start_date' => Carbon::create('2023', '04', '26'),
  'end_date' => null,
  'time' => null,
  'location_id' => 5, // Patra - address: Krymská 286/17, Vršovice, 101 00
  'is_paid' => false,
  'price' => null,
  'qr_code_image' => '',
  'category_id' => 10,
  'description_cz' => '',
  'description_en' => '',
  'instructions_cz' => 'Krymská - Tram 4, 12, 22; Bus - 135',
  'instructions_en' => 'Krymská - Tram 4, 12, 22; Bus - 135',
  'is_recurring' => true, //1 per year
  // 'is_active' => true,
 'is_featured'=> false,
  'capacity' => null,
  "is_phone_required" => false,
  "image_id" => 34,
  // "already_registered" => null
]
];

      foreach ($events as $event) {
        $event = Event::create($event);
        // $event->setIsActive();
        $event->save();
    }

    }
}


