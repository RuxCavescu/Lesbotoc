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

        $contacts = [];

    foreach ($contacts as $contact) {
        Contact::create($contact);
    }

    }
}
