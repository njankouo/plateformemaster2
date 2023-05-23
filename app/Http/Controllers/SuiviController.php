<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SuiviController extends Controller
{
    //

    public function index(){
        $user=User::all();
        return view('suivi.index',compact('user'));
    }
}
