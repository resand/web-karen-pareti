<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class HomeController extends Controller
{

    public function index()
    {
        session(['sesion' => true]);
        //dd(session('sesion'));

        return view('home');
    }

}
