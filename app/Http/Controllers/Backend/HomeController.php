<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function welcome()
    {

        return view('welcome');

    }
    public function contact()
    {
        return view('contact');

    }
}
