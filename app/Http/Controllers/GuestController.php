<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function home()
    {
        return view('guest.welcome');
    }

    public function instalaciones()
    {
        return view('guest.instalaciones');
    }
    
    public function eventos()
    {
        return view('guest.eventos');
    }

    public function historia()
    {
        return view('guest.historia');
    }

    public function galeria()
    {
        return view('guest.galeria');
    }

    public function contactanos()
    {
        return view('guest.contactanos');
    }
}
