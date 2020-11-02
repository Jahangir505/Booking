<?php

use Illuminate\Database\Seeder;
use App\Models\General;
use Illuminate\Support\Facades\DB;

class GeneralsTableSeeder extends Seeder
{ 
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $SEP =  (strtolower(PHP_OS) == 'windows' || 'winnt') ? "\\" : "/";
        DB::table('generals')->delete();

        // $originPath = resource_path('assets'.$SEP);
        // $destinationPath = storage_path('app').$SEP."public".$SEP."logo".$SEP;
        $originPath = resource_path('assets/');
        $destinationPath = storage_path('app')."/public/logo/";

        if(!is_dir($destinationPath)) {
            mkdir($destinationPath);
        }

        $default = [
            'title' => 'Redsea Booking',
            'subtitle' => 'Subtitle',
            'copyright' => 'All Right Reserved &copy; RedSea Booking',
            'default_lang' => 'en',
            'default_currency' => 'USD',
            'business_name' => 'RedSea Booking',
            'offline_message' => 'Our website is offline currently',
            'keywords' => 'redsea, redsea hotels booking, redsea booking'
        ];

        $fileName = 'logo.png';

        copy($originPath.$fileName, $destinationPath.$fileName);
        $default['business_logo'] = $fileName;

        $fileName = 'favicon.png';
        copy($originPath.$fileName, $destinationPath.$fileName);
        $default['favicon'] = $fileName;

        General::create($default);

    }
}
