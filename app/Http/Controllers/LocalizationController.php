<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocalizationController extends Controller
{
    public function setLang( $lang ) {
        \Session::put( 'lang', $lang );
        return redirect() -> back();
    }

    public function getLang() {
        $lang = \App::getLocale();
        return $lang;
    }
}
