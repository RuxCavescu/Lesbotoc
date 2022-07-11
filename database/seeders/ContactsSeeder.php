<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;
use DB;
use Carbon\Carbon;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('contacts')->truncate();

        $contacts = [
        [
            'name' => 'Leona Němcová',
            'email' => 'lejla.nemcova@seznam.cz',
            'phone' => null,
            'source' => 'Dámská jízda 200801',
            'is_subscribed' => false,
            'created_at' => Carbon::parse('2020-07-28 17:41:00')
        ],

        [
            'name' => 'Denisa',
            'email' => 'sanica@seznam.cz',
            'phone' => null,
            'source' => 'Dámská jízda 200801',
            'is_subscribed' => false,
            'created_at' => Carbon::parse('2020-07-28 17:49:00')
        ],
    
        [
            'name' => 'Lucie Rajcová',
            'email' => 'rajcova.lucie@gmail.com',
            'phone' => null,
            'source' => 'Dámská jízda 200801',
            'is_subscribed' => false,
            'created_at' => Carbon::parse('2020-07-29 08:46:00')
        ],

        [
            'name' => 'Monika Piechova',
            'email' => 'monapiechpiechova@gmail.com',
            'phone' => null,
            'source' => 'Dámská jízda 200801',
            'is_subscribed' => false,
            'created_at' => Carbon::parse('2020-07-29 14:51:00')
        ],

        [
            'name' => 'Míša',
            'email' => 'masala@centrum.cz',
            'phone' => null,
            'source' => 'Dámská jízda 200801',
            'is_subscribed' => false,
            'created_at' => Carbon::parse('2020-07-30 16:55:00'),
        ],

        [
            'name' => 'Aďa',
            'email' => 'adela.viskupicova@seznam.cz',
            'phone' => null,
            'source' => 'Dámská jízda 200801',
            'is_subscribed' => false,
            'created_at' => Carbon::parse('2020-07-31 19:32:00'),
        ],

        [
            'name' => 'Gwen',
            'email' => 'gwenicek@seznam.cz',
            'phone' => null,
            'source' => 'Dámská jízda 200801',
            'is_subscribed' => false,
            'created_at' => Carbon::parse('2020-07-31 19:33:00'),
        ],

        [
            'name' => 'Evča',
            'email' => 'karlvonbahnhof13@seznam.cz',
            'phone' => null,
            'source' => 'Dámská jízda 200801',
            'is_subscribed' => false,
            'created_at' => Carbon::parse('2020-08-01 14:19:00'),
        ],

        [
            'name' => 'Káča',
            'email' => 'matalova.katerina@gmail.com',
            'phone' => null,
            'source' => 'Prague Pride SD 2020',
            'is_subscribed' => false,
            'created_at' => Carbon::parse('2020-07-13 14:09:00'),
        ],

        [
            'name' => 'Marie Schneiderová',
            'email' => 'maruskaschn@gmail.com',
            'phone' => null,
            'source' => 'Prague Pride SD 2020',
            'is_subscribed' => false,
            'created_at' => Carbon::parse('2020-07-13 20:57:00'),
        ],

        [
            'name' => 'Zuzana Vlčková',
            'email' => 'z.vlckova1704@gmail.com',
            'phone' => null,
            'source' => 'Prague Pride SD 2020',
            'is_subscribed' => false,
            'created_at' => Carbon::parse('2020-07-15 13:38:00'),
        ],

        [
            'name' => 'Markéta Vlková',
            'email' => 'market.vlkov@seznam.cz',
            'phone' => null,
            'source' => 'Prague Pride SD 2020',
            'is_subscribed' => false,
            'created_at' => Carbon::parse('2020-07-15 13:45:00'),
        ],

        [
            'name' => 'Anna Mifková',
            'email' => 'mifkovaanna@gmail.com',
            'phone' => null,
            'source' => 'Prague Pride SD 2020',
            'is_subscribed' => false,
            'created_at' => Carbon::parse('2020-07-20 22:35:00'),
        ],

        [
            'name' => 'Hana Malická',
            'email' => 'hana.malicka.hana@gmail.com',
            'phone' => null,
            'source' => 'Prague Pride SD 2020',
            'is_subscribed' => false,
            'created_at' => Carbon::parse('2020-07-27 18:21:00'),
        ],

        [
            'name' => 'Kateřina Průšová',
            'email' => 'prusova.k2@gmail.com',
            'phone' => null,
            'source' => 'Prague Pride SD 2020',
            'is_subscribed' => false,
            'created_at' => Carbon::parse('2020-07-27 18:32:00'),
        ],

        [
            'name' => 'Ester Stiburkova',
            'email' => 'ester.stiburkova@educanet.cz',
            'phone' => null,
            'source' => 'Prague Pride SD 2020',
            'is_subscribed' => false,
            'created_at' => Carbon::parse('2020-07-29 00:51:00'),
        ],

        [
            'name' => 'Kateřina Vaňková',
            'email' => 'katerina.vanek@seznam.cz',
            'phone' => null,
            'source' => 'Prague Pride SD 2020',
            'is_subscribed' => false,
            'created_at' => Carbon::parse('2020-07-29 21:18:00'),
        ],

        [
            'name' => 'Kateřina Müllerová',
            'email' => 'mullerova.ktr@gmail.com',
            'phone' => null,
            'source' => 'Prague Pride SD 2020',
            'is_subscribed' => false,
            'created_at' => Carbon::parse('2020-07-30 21:36:00'),
        ],

        [
            'name' => 'Evelyn Danelova',
            'email' => 'evelynd@posteo.cz',
            'phone' => null,
            'source' => 'Prague Pride SD 2020',
            'is_subscribed' => false,
            'created_at' => Carbon::parse('2020-07-30 21:39:00'),
        ],

        [
            'name' => 'Markéta Hájková',
            'email' => 'hajkacka@seznam.cz',
            'phone' => null,
            'source' => 'Prague Pride SD 2020',
            'is_subscribed' => false,
            'created_at' => Carbon::parse('2020-07-31 17:44:00'),
        ],

        [
            'name' => 'Mariia',
            'email' => 'golovachevamaria1@gmail.com',
            'phone' => null,
            'source' => 'Prague Pride SD 2020',
            'is_subscribed' => false,
            'created_at' => Carbon::parse('2020-08-02 16:18:00'),
        ],

        [
            'name' => 'Alžběta Burešová',
            'email' => 'alzbeta.bur@gmail.com',
            'phone' => null,
            'source' => 'Prague Pride SD 2020',
            'is_subscribed' => false,
            'created_at' => Carbon::parse('2020-08-02 18:42:00'),
        ],

        [
            'name' => 'Iva',
            'email' => 'tia@email.cz',
            'phone' => null,
            'source' => 'Prague Pride SD 2020',
            'is_subscribed' => false,
            'created_at' => Carbon::parse('2020-08-02 21:11:00'),
        ],

        [
            'name' => 'Anděla Procházková',
            'email' => 'prochazkova.an@email.cz',
            'phone' => null,
            'source' => 'Prague Pride SD 2020',
            'is_subscribed' => false,
            'created_at' => Carbon::parse('2020-08-02 21:41:00'),
        ],

        [
            'name' => 'Dominika',
            'email' => 'wolfydomca@gmail.com',
            'phone' => null,
            'source' => 'Prague Pride SD 2020',
            'is_subscribed' => false,
            'created_at' => Carbon::parse('2020-08-02 22:25:00'),
        ],

        [
            'name' => 'Anastasia',
            'email' => 'anastazia.gromyko@gmail.com',
            'phone' => null,
            'source' => 'Prague Pride SD 2020',
            'is_subscribed' => false,
            'created_at' => Carbon::parse('2020-08-03 12:26:00'),
        ],

        [
            'name' => 'Aneta Hájková',
            'email' => 'aneta.hajkova@matfyz.cz',
            'phone' => null,
            'source' => 'Prague Pride SD 2020',
            'is_subscribed' => false,
            'created_at' => Carbon::parse('2020-08-03 17:58:00'),
        ],

        [
            'name' => 'Lenka',
            'email' => 'aquarel.zelenej@centrum.cz',
            'phone' => null,
            'source' => 'Prague Pride SD 2020',
            'is_subscribed' => false,
            'created_at' => Carbon::parse('2020-08-03 21:53:00'),
        ],

        [
            'name' => 'Marie Dedikova',
            'email' => 'mddemarie@gmail.com',
            'phone' => null,
            'source' => 'Prague Pride SD 2020',
            'is_subscribed' => false,
            'created_at' => Carbon::parse('2020-08-02 22:35:00'),
        ],

        [
            'name' => 'Petra',
            'email' => 'sakura24.PV@gmail.com',
            'phone' => null,
            'source' => 'Prague Pride SD 2020',
            'is_subscribed' => false,
            'created_at' => Carbon::parse('2020-08-04 00:08:00'),
        ],

        [
            'name' => 'Eliška Hauerová',
            'email' => 'eli.hauerova@gmail.com',
            'phone' => null,
            'source' => 'Prague Pride SD 2020',
            'is_subscribed' => false,
            'created_at' => Carbon::parse('2020-08-04 02:54:00'),
        ],

        [
            'name' => 'Nika',
            'email' => 'matejovska.nika@gmail.com',
            'phone' => null,
            'source' => 'Prague Pride SD 2020',
            'is_subscribed' => false,
            'created_at' => Carbon::parse('2020-08-04 08:38:00'),
        ],

        [
            'name' => 'Kristýna Olbortová',
            'email' => 'kristyna.olbortova@seznam.cz',
            'phone' => null,
            'source' => 'Prague Pride SD 2020',
            'is_subscribed' => false,
            'created_at' => Carbon::parse('2020-08-04 11:11:00'),
        ],

        [
            'name' => 'Rosie Smrčková',
            'email' => 'ruzenasmrckova@gmail.com',
            'phone' => '773992520',
            'source' => 'Prague Pride SD 2020',
            'is_subscribed' => true,
            'created_at' => Carbon::parse('2020-08-04 19:09:00'),

        ],

        [
            'name' => 'Tereza Kandlerová',
            'email' => 'terkfish@gmail.com',
            'phone' => null,
            'source' => 'Prague Pride SD 2020',
            'is_subscribed' => false,
            'created_at' => Carbon::parse('2020-08-04 21:32:00'),
        ],

        [
            'name' => 'Adéla Nohavová',
            'email' => 'adela.nohavova@seznam.cz',
            'phone' => null,
            'source' => 'Prague Pride SD 2020',
            'is_subscribed' => false,
            'created_at' => Carbon::parse('2020-08-05 12:51:00'),
        ],

        [
            'name' => 'Markéta',
            'email' => 'marketa.rockova@email.cz',
            'phone' => null,
            'source' => 'Prague Pride SD 2020',
            'is_subscribed' => false,
            'created_at' => Carbon::parse('2020-08-05 17:08:00'),
        ],

        [
            'name' => 'Markét',
            'email' => 'meggieadamickova@icloud.com',
            'phone' => '737483561',
            'source' => 'LSD_210929',
            'is_subscribed' => false,
            'created_at' => Carbon::parse('2021-08-02 20:33:00'),
        ],

        [
            'name' => 'Georgia Hejduková',
            'email' => 'apapu@email.cz',
            'phone' => '775864103',
            'source' => 'LSD_210929',
            'is_subscribed' => false,
            'created_at' => Carbon::parse('2021-08-02 23:09:00'),
        ],

        [
            'name' => 'Kateřina Půlkrabová',
            'email' => 'katerinampulkrabova@gmail.com',
            'phone' => '603946836',
            'source' => 'LSD_210929',
            'is_subscribed' => true,
            'created_at' => Carbon::parse('2021-08-02 23:34:00'),
        ],

        [
            'name' => 'Carolina',
            'email' => 'ilorac@seznam.cz',
            'phone' => '728463585',
            'source' => 'LSD_210929',
            'is_subscribed' => true,
            'created_at' => Carbon::parse('2021-08-03 12:00:00'),
        ],

        [
            'name' => 'Olesya',
            'email' => 'alexandraowen2807@gmail.com',
            'phone' => '777434993',
            'source' => 'LSD_210929',
            'is_subscribed' => true,
            'created_at' => Carbon::parse('2021-08-03 12:13:00'),
        ],

        [
            'name' => 'Janis',
            'email' => 'janisem@seznam.cz',
            'phone' => '731577508',
            'source' => 'LSD_210929',
            'is_subscribed' => true,
            'created_at' => Carbon::parse('2021-08-03 23:54:00'),
        ],

        [
            'name' => 'Michaela Smidová',
            'email' => 'smidova.michaela@gmail.com',
            'phone' => '728632612',
            'source' => 'LSD_210929',
            'is_subscribed' => true,
            'created_at' => Carbon::parse('2021-08-04 17:28:00'),
        ],

        [
            'name' => 'Aneta K.',
            'email' => 'a.kond@seznam.cz',
            'phone' => null,
            'source' => 'LSD_210929',
            'is_subscribed' => true,
            'created_at' => Carbon::parse('2021-08-07 23:13:00'),
        ],

        [
            'name' => 'Mai',
            'email' => 'maiphuong22002@gmail.com',
            'phone' => '730922325',
            'source' => 'LSD_210929',
            'is_subscribed' => true,
            'created_at' => Carbon::parse('2021-08-05 00:02:00'),
        ],

        [
            'name' => 'Andrea',
            'email' => 'andrea.barochovska@seznam.cz',
            'phone' => '777352050',
            'source' => 'LSD_210929',
            'is_subscribed' => true,
            'created_at' => Carbon::parse('2021-09-05 00:26:00'),
        ],

        [
            'name' => 'Karolína Savincová',
            'email' => 'karolina.savincova@seznam.cz',
            'phone' => '606529327',
            'source' => 'LSD_210929',
            'is_subscribed' => true,
            'created_at' => Carbon::parse('2021-09-05 10:59:00'),
        ],

        [
            'name' => 'Týna',
            'email' => 'kristynaprasilova2@gmail.com',
            'phone' => '607758666',
            'source' => 'LSD_210929',
            'is_subscribed' => true,
            'created_at' => Carbon::parse('2021-09-06 18:24:00'),
        ],

        [
            'name' => 'Lýdie',
            'email' => 'cestasvetemvedvou@seznam.cz',
            'phone' => '608226322',
            'source' => 'LSD_210929',
            'is_subscribed' => true,
            'created_at' => Carbon::parse('2021-09-07 16:35:00'),
        ],

        [
            'name' => 'Gabi Babulíková',
            'email' => 'babulikova@gmail.com',
            'phone' => '604723771',
            'source' => 'LSD_210929',
            'is_subscribed' => true,
            'created_at' => Carbon::parse('2021-09-27 07:53:00'),
        ],

    
    
    ];

    foreach ($contacts as $contact) {
        Contact::create($contact);
    }

    }
}
