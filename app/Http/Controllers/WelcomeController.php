<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class WelcomeController extends Controller
{

    public function index()
    {
        $home_content = view('pages.home');
        return view('master')->with('content',$home_content);
    }

}