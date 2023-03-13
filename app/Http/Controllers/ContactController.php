<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact-us1');
    }
    public function form()
    {
        return view('contact-us2');
    }
}
