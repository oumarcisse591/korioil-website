<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Session;

class PageController extends Controller
{
    //

    public function  GETPAGEAPROPOS()
    {
        // $locale = Session::get('lang');
        // App::setLocale($locale);
        return view('pages.about');
    }

    public  function GETPAGECONTACT()
    {
        // $value = Session::get('lang');
        // App::setLocale($value);
        return view('pages.contact');
    }
    public function GETHOMEPAGE()
    {
        // $locale = App::currentLocale();
        // $value = Session::get('lang');
        // if(!$value){
        //    session(['lang'=>$locale]);
        //    $value = Session::get('lang');
        // }
        // App::setLocale($value);
        return view('welcome');
    }
    public function GETPAGESERVICES()

    {
        // $locale = Session::get('lang');
        // App::setLocale($locale);
        return view('pages.services');
    }
}
