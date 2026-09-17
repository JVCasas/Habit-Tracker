<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{
    public function index()
    {
        $name = "Juan";
        $habits = ["Ler", "Jogar", "Programar"];

        return view('home', ['name' => $name, 'habits' => $habits]);
    }
}
