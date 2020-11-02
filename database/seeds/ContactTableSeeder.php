<?php

use Illuminate\Database\Seeder;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->delete();
        Contact::create([
            'phone' => '+1 8976543201',
            'email' => 'redsea@info.com',
            'address' => 'Redsea Travel Ltd, 34234 Golf Course Road, Avenue, US'
        ]);
    }
}
