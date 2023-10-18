<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function Gerbera(): string
    {
        return view('Gerbera');
    }

    public function Kaktusz(): string
    {
        return view('Kaktusz');
    }

    public function Kardvirag(): string
    {
        return view('Kardvirag');
    }

    public function Rózsa(): string
    {
        return view('Rózsa');
    }

    public function tulipan(): string
    {
        return view('tulipán');
    }

}
