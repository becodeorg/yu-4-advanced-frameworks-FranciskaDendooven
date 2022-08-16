<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Formcontroller extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function show()
    {
        return view('form-body');
    }

    public function showNews()
    {
        return view('newspage');
    }

    public function showSubmitSignUp()
    {
        return view('form-body-signup');
    }

    public function showCalender()
    {
        return view('calender');
    }
}
