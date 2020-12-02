<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller {
    public function getCountries() {
        $countries = Country::all();
        $countriesTabs = [];
        for( $i = 0; $i < 241; $i ++ ){
            $countriesTabs[ $i ] = $countries[ $i ] -> name;
        }
        return $countriesTabs;
    }
}
