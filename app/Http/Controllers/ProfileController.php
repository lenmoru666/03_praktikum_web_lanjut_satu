<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view(('profile'))
        ->with('nama', 'Falendika Tegar Pratama')
        ->with('nim', '2141720107')
        ->with('kelas', 'TI-2H')
        ->with('absen', '08');
    }
}
