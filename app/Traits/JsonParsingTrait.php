<?php 
namespace App\Traits;

trait JsonParsingTrait {
    // protected $separator = \PHP_OS == 'Windows' || 'WINNT' ? "\\" : "/";

    protected function loadFile() {
        $path = \storage_path()."/geo/world-cities.json";
        return json_decode(file_get_contents($path), true);
    }

    protected function get_country_data($name) {
        
        $files = $this->loadFile();

        $country_data = [];

        foreach($files as $file) {
            if(strtolower($file['country'])  == strtolower($name)) {
                array_push($country_data, $file);
            }
        }

        return $country_data;
    }

    public function get_countries() {
        $countries = [];
        $data = $this->loadFile();

        foreach($data as $country) {
            if(!in_array($country['country'], $countries)) {
                array_push($countries, $country['country']);
            }
        }

        return $countries;

    }

    public function get_cities($country_name) {

        $country_data = $this->get_country_data($country_name);

        $cities = [];

        foreach($country_data as $country) {

            if(!in_array($country['subcountry'], $cities)) {
                array_push($cities, $country['subcountry']);
            }

        }

        return $cities;
    }


}