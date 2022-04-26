<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Home(){
        $title = 'Employee Information';
        return view('pages.home',compact('title'));
    }
}
