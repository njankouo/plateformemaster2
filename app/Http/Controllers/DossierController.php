<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DossierController extends Controller
{
    //

    public function index(){
        return view('dossier.dossier');
    }
}
