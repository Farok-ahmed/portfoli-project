<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function index(){
        return view('pages.home');
    }

    function about(){
        return view('pages.about');
    }
    function services(){
        return view('pages.services');
    }
    function project(){
        return view('pages.project');
    }
    function blog(){
        return view('pages.blog');
    }

    function contact(){
        return view('pages.contact');
    }
}
