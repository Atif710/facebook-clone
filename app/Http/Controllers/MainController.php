<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function viewfriends(){

        return view('front.friends');
    }

    public function viewgroups(){

        return view('front.groups');
    }
}
