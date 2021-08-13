<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function store () {

        return redirect('/register')->with('msg', 'Evento criado com sucesso!');
    }
}
