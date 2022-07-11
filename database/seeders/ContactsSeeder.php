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

        DB::table('events')->truncate();

        $contacts = [
        // [
        //     'name' => 'Leona Němcová',
        //     'email' => 'lejla.nemcova@seznam.cz',
        //     'phone' => null,
        //     'source' => 'Dámská jízda 200801',
        //     'created_at' => Carbon::create('2020', '07', '28'), //2020-07-28 17:41:00 
        // ],

        // [
        //     'name' => 'Denisa',
        //     'email' => 'sanica@seznam.cz',
        //     'phone' => null,
        //     'source' => 'Dámská jízda 200801',
        //     'created_at' => Carbon::create('2020', '07', '28'), //2020-07-28 17:49:00,
        // ],
    
        // [
        //     'name' => 'Lucie Rajcová',
        //     'email' => 'rajcova.lucie@gmail.com',
        //     'phone' => null,
        //     'source' => 'Dámská jízda 200801',
        //     'created_at' => 7/29/20 8:46,
        // ],

        // [
        //     'name' => 'Monika Piechova',
        //     'email' => 'monapiechpiechova@gmail.com',
        //     'phone' => null,
        //     'source' => 'Dámská jízda 200801',
        //     'created_at' => 7/29/20 14:51,
        // ],

        // [
        //     'name' => 'Míša',
        //     'email' => 'masala@centrum.cz',
        //     'phone' => null,
        //     'source' => 'Dámská jízda 200801',
        //     'created_at' => 7/30/20 16:55,
        // ],

        // [
        //     'name' => 'Aďa',
        //     'email' => 'adela.viskupicova@seznam.cz',
        //     'phone' => null,
        //     'source' => 'Dámská jízda 200801',
        //     'created_at' => 7/31/20 19:32,
        // ],

        // [
        //     'name' => 'Gwen',
        //     'email' => 'gwenicek@seznam.cz',
        //     'phone' => null,
        //     'source' => 'Dámská jízda 200801',
        //     'created_at' => 7/31/20 19:33,
        // ],

        // [
        //     'name' => 'Evča',
        //     'email' => 'karlvonbahnhof13@seznam.cz',
        //     'phone' => null,
        //     'source' => 'Dámská jízda 200801',
        //     'created_at' => 8/1/20 14:19,
        // ],

        // [
        //     'name' => 'Káča',
        //     'email' => 'matalova.katerina@gmail.com',
        //     'phone' => null,
        //     'source' => 'Prague Pride SD 2020',
        //     'created_at' => 7/13/20 2:09,
        // ],

        // [
        //     'name' => 'Marie Schneiderová',
        //     'email' => 'maruskaschn@gmail.com',
        //     'phone' => null,
        //     'source' => 'Prague Pride SD 2020',
        //     'created_at' => 7/13/20 20:57,
        // ],

        // [
        //     'name' => 'Zuzana Vlčková',
        //     'email' => 'z.vlckova1704@gmail.com',
        //     'phone' => null,
        //     'source' => 'Prague Pride SD 2020',
        //     'created_at' => 7/15/20 13:38,
        // ],

        // [
        //     'name' => 'Markéta Vlková',
        //     'email' => 'market.vlkov@seznam.cz',
        //     'phone' => null,
        //     'source' => 'Prague Pride SD 2020',
        //     'created_at' => 7/15/20 13:45,
        // ],

        // [
        //     'name' => 'Anna Mifková',
        //     'email' => 'mifkovaanna@gmail.com',
        //     'phone' => null,
        //     'source' => 'Prague Pride SD 2020',
        //     'created_at' => 7/20/20 22:35,
        // ],

        // [
        //     'name' => 'Hana Malická',
        //     'email' => 'hana.malicka.hana@gmail.com',
        //     'phone' => null,
        //     'source' => 'Prague Pride SD 2020',
        //     'created_at' => 7/27/20 18:21,
        // ],

        // [
        //     'name' => 'Kateřina Průšová',
        //     'email' => 'prusova.k2@gmail.com',
        //     'phone' => null,
        //     'source' => 'Prague Pride SD 2020',
        //     'created_at' => 7/27/20 18:32,
        // ],

        // [
        //     'name' => 'Ester Stiburkova',
        //     'email' => 'ester.stiburkova@educanet.cz',
        //     'phone' => null,
        //     'source' => 'Prague Pride SD 2020',
        //     'created_at' => 7/29/20 0:51,
        // ],

        // [
        //     'name' => 'Kateřina Vaňková',
        //     'email' => 'katerina.vanek@seznam.cz',
        //     'phone' => null,
        //     'source' => 'Prague Pride SD 2020',
        //     'created_at' => 7/29/20 21:18,
        // ],

        // [
        //     'name' => 'Kateřina Müllerová',
        //     'email' => 'mullerova.ktr@gmail.com',
        //     'phone' => null,
        //     'source' => 'Prague Pride SD 2020',
        //     'created_at' => 7/30/20 21:36,
        // ],

        // [
        //     'name' => 'Evelyn Danelova',
        //     'email' => 'evelynd@posteo.cz',
        //     'phone' => null,
        //     'source' => 'Prague Pride SD 2020',
        //     'created_at' => 7/30/20 21:39,
        // ],

        // [
        //     'name' => 'Markéta Hájková',
        //     'email' => 'hajkacka@seznam.cz',
        //     'phone' => null,
        //     'source' => 'Prague Pride SD 2020',
        //     'created_at' => 7/31/20 17:44,
        // ],

        // [
        //     'name' => 'Mariia',
        //     'email' => 'golovachevamaria1@gmail.com',
        //     'phone' => null,
        //     'source' => 'Prague Pride SD 2020',
        //     'created_at' => 8/2/20 4:18,
        // ],

        // [
        //     'name' => 'Alžběta Burešová',
        //     'email' => 'alzbeta.bur@gmail.com',
        //     'phone' => null,
        //     'source' => 'Prague Pride SD 2020',
        //     'created_at' => 8/2/20 18:42,
        // ],

        // [
        //     'name' => 'Iva',
        //     'email' => 'tia@email.cz',
        //     'phone' => null,
        //     'source' => 'Prague Pride SD 2020',
        //     'created_at' => 8/2/20 21:11,
        // ],

        // [
        //     'name' => 'Anděla Procházková',
        //     'email' => 'prochazkova.an@email.cz',
        //     'phone' => null,
        //     'source' => 'Prague Pride SD 2020',
        //     'created_at' => 8/2/20 21:41,
        // ],

        // [
        //     'name' => 'Dominika',
        //     'email' => 'wolfydomca@gmail.com',
        //     'phone' => null,
        //     'source' => 'Prague Pride SD 2020',
        //     'created_at' => 8/2/20 22:25,
        // ],

        // [
        //     'name' => 'Anastasia',
        //     'email' => 'anastazia.gromyko@gmail.com',
        //     'phone' => null,
        //     'source' => 'Prague Pride SD 2020',
        //     'created_at' => 8/3/20 12:26,
        // ],

        // [
        //     'name' => 'Aneta Hájková',
        //     'email' => 'aneta.hajkova@matfyz.cz',
        //     'phone' => null,
        //     'source' => 'Prague Pride SD 2020',
        //     'created_at' => 8/3/20 17:58,
        // ],

        // [
        //     'name' => 'Lenka',
        //     'email' => 'aquarel.zelenej@centrum.cz',
        //     'phone' => null,
        //     'source' => 'Prague Pride SD 2020',
        //     'created_at' => 8/3/20 21:53,
        // ],

        // [
        //     'name' => 'Marie Dedikova',
        //     'email' => 'mddemarie@gmail.com',
        //     'phone' => null,
        //     'source' => 'Prague Pride SD 2020',
        //     'created_at' => 8/3/20 22:35,
        // ],

        // [
        //     'name' => 'Petra',
        //     'email' => 'sakura24.PV@gmail.com',
        //     'phone' => null,
        //     'source' => 'Prague Pride SD 2020',
        //     'created_at' => 8/4/20 0:22,
        // ],

        // [
        //     'name' => 'Eliška Hauerová',
        //     'email' => 'eli.hauerova@gmail.com',
        //     'phone' => null,
        //     'source' => 'Prague Pride SD 2020',
        //     'created_at' => 8/4/20 2:54,
        // ],

        // [
        //     'name' => 'Nika',
        //     'email' => 'matejovska.nika@gmail.com',
        //     'phone' => null,
        //     'source' => 'Prague Pride SD 2020',
        //     'created_at' => 8/4/20 8:38,
        // ],

        // [
        //     'name' => 'Kristýna Olbortová',
        //     'email' => 'kristyna.olbortova@seznam.cz',
        //     'phone' => null,
        //     'source' => 'Prague Pride SD 2020',
        //     'created_at' => 8/4/20 11:11,
        // ],

        // [
        //     'name' => 'Rosie Smrčková',
        //     'email' => 'ruzenasmrckova@gmail.com',
        //     'phone' => '773992520',
        //     'source' => 'Prague Pride SD 2020',
        //     'is_subscribed' => true,
        //     'created_at' => 8/4/20 19:09,
        // ],

        // [
        //     'name' => 'Tereza Kandlerová',
        //     'email' => 'terkfish@gmail.com',
        //     'phone' => null,
        //     'source' => 'Prague Pride SD 2020',
        //     'created_at' => 8/4/20 21:32,
        // ],

        // [
        //     'name' => 'Adéla Nohavová',
        //     'email' => 'adela.nohavova@seznam.cz',
        //     'phone' => null,
        //     'source' => 'Prague Pride SD 2020',
        //     'created_at' => 8/5/20 12:51,
        // ],

        // [
        //     'name' => 'Markéta',
        //     'email' => 'marketa.rockova@email.cz',
        //     'phone' => null,
        //     'source' => 'Prague Pride SD 2020',
        //     'created_at' => 8/5/20 17:08,
        // ],

        // [
        //     'name' => 'Markét',
        //     'email' => 'meggieadamickova@icloud.com',
        //     'phone' => '737483561',
        //     'source' => 'LSD_210929',
        //     'created_at' => 8/2/21 20:33,
        // ],

        // [
        //     'name' => 'Georgia Hejduková',
        //     'email' => 'apapu@email.cz',
        //     'phone' => '775864103',
        //     'source' => 'LSD_210929',
        //     'created_at' => 8/2/21 23:09,
        // ],

        // [
        //     'name' => 'Kateřina Půlkrabová',
        //     'email' => 'katerinampulkrabova@gmail.com',
        //     'phone' => '603946836',
        //     'source' => 'LSD_210929',
        //     'is_subscribed' => true,
        //     'created_at' => 8/2/21 23:34,
        // ],

        // [
        //     'name' => 'Carolina',
        //     'email' => 'ilorac@seznam.cz',
        //     'phone' => '728463585',
        //     'source' => 'LSD_210929',
        //     'is_subscribed' => true,
        //     'created_at' => 8/3/21 12:00,
        // ],

        // [
        //     'name' => 'Olesya',
        //     'email' => 'alexandraowen2807@gmail.com',
        //     'phone' => '777434993',
        //     'source' => 'LSD_210929',
        //     'is_subscribed' => true,
        //     'created_at' => 8/3/21 12:13,
        // ],

        // [
        //     'name' => 'Janis',
        //     'email' => 'janisem@seznam.cz',
        //     'phone' => '731577508',
        //     'source' => 'LSD_210929',
        //     'is_subscribed' => true,
        //     'created_at' => 8/3/21 23:54,
        // ],

        // [
        //     'name' => 'Michaela Smidová',
        //     'email' => 'smidova.michaela@gmail.com',
        //     'phone' => '728632612',
        //     'source' => 'LSD_210929',
        //     'is_subscribed' => true,
        //     'created_at' => 8/4/21 17:28,
        // ],

        // [
        //     'name' => 'Aneta K.',
        //     'email' => 'a.kond@seznam.cz',
        //     'phone' => null,
        //     'source' => 'LSD_210929',
        //     'is_subscribed' => true,
        //     'created_at' => 8/7/21 23:13,
        // ],

        // [
        //     'name' => 'Mai',
        //     'email' => 'maiphuong22002@gmail.com',
        //     'phone' => '730922325',
        //     'source' => 'LSD_210929',
        //     'is_subscribed' => true,
        //     'created_at' => 9/5/21 0:02,
        // ],

        // [
        //     'name' => 'Andrea',
        //     'email' => 'andrea.barochovska@seznam.cz',
        //     'phone' => '777352050',
        //     'source' => 'LSD_210929',
        //     'is_subscribed' => true,
        //     'created_at' => 9/5/21 0:26,
        // ],

        // [
        //     'name' => 'Karolína Savincová',
        //     'email' => 'karolina.savincova@seznam.cz',
        //     'phone' => '606529327',
        //     'source' => 'LSD_210929',
        //     'is_subscribed' => true,
        //     'created_at' => 9/5/21 10:59,
        // ],

        // [
        //     'name' => 'Týna',
        //     'email' => 'kristynaprasilova2@gmail.com',
        //     'phone' => '607758666',
        //     'source' => 'LSD_210929',
        //     'is_subscribed' => true,
        //     'created_at' => 9/6/21 18:24,
        // ],

        // [
        //     'name' => 'Lýdie',
        //     'email' => 'cestasvetemvedvou@seznam.cz',
        //     'phone' => '608226322',
        //     'source' => 'LSD_210929',
        //     'is_subscribed' => true,
        //     'created_at' => 9/7/21 16:35,
        // ],

        // [
        //     'name' => 'Gabi Babulíková',
        //     'email' => 'babulikova@gmail.com',
        //     'phone' => '604723771',
        //     'source' => 'LSD_210929',
        //     'is_subscribed' => true,
        //     'created_at' => 9/27/21 7:53,
        // ],

    
    
    ];

    foreach ($contacts as $contact) {
        Contact::create($contact);
    }

    }
}
