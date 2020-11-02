<?php

namespace App\Providers;

use App\Models\General;
use App\Models\Contact;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\Section;

class AppServiceProvider extends ServiceProvider
{
    

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //for older mysql version
        Schema::defaultStringLength(191);

        $gnl = null;
        $contact = null;
        $footers = null;
        $navigation  = null;

        $footer_one = null;
        $footer_two = null;
        $footer_three = null;
        $footer_four = null;


        if(Schema::hasTable('sections')) {

            $footers = Section::where('section_type', 'footer')->get();
            $navigation = Section::where([
                ['section_type','=', 'header'],
                ['section_name', '=' ,'navigation']
            ])->first();
        } 

        if(!$footers==null){

            foreach($footers as $footer) {
                
                if ($footer->section_name == "footer_one") {
                    $footer_one = $footer;
                } elseif ($footer->section_name == "footer_two") {
                    $footer_two = $footer;
                } elseif ($footer->section_name == "footer_three") {
                    $footer_three = $footer;
                } elseif ($footer->section_name == "footer_four") {
                    $footer_four = $footer;
                }
            }
        }

        if(Schema::hasTable('generals') && Schema::hasTable('contacts')) {
            $gnl = General::first();
            $contact = Contact::first();
        }
        
        view()->share(['gnl' => $gnl, 'contact' => $contact, 'footer_one' => $footer_one, 'footer_two' => $footer_two, 'footer_three' => $footer_three, 'footer_four' => $footer_four, 'navigation' => $navigation]);
    }
}
