<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        $message = "Welcome";
        return view('pages.index.home')->with('message');
    }

    public function service(){
        //$message = "Service Page";
        return view('pages.products.service');
    }

    public function ourTeams(){
        return view('pages.ourTeams');
    }


    public function contact(){
        return view('pages.contact');
    }

    public function aboutUs(){
        return view('pages.aboutUs');
    }
}