<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage(){

        return view('welcome');
        
    }

    public function mocs(){

        return view('mocs');

    }

    public function externalProjects(){

        return view('externalProjects');

    }

    public function about(){

        return view('about');
        
    }
}
