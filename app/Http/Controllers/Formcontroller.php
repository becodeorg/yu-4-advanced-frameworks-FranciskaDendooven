<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Formcontroller extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function show()
    {
        return view('form-body');
    }
}
