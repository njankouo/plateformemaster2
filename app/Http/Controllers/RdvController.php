<?php

namespace App\Http\Controllers;

use App\Models\Rdv;
use App\Models\User;
use Illuminate\Http\Request;

class RdvController extends Controller
{


    public function index($id){
        $user = User::with('rdv')->find($id);
        $events[] = [

            'title',

            'start',
            'end',
        ];
$rdvs=Rdv::all();
            foreach($user->rdv as $rdvs){
             if(!empty($rdvs->titre)){
                $events[] = [

                    'title' => 'occupé',

                    'start' => $rdvs->date,
                    'end' => $rdvs->end_date,
                ];
             }



    }
        return view('rdv.index',compact('events','rdvs','user'));
    }

public function list(){
    $rdv=Rdv::all();
        $users=User::all();
    return view('last',compact('rdv','users'));
}
}
