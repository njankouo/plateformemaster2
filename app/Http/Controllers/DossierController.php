<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use PDF;
class DossierController extends Controller
{
    //

    public function index(){
        $patient=Patient::with('consultation','prescription','rdv','hospitalisation','examen')->get();
        return view('dossier.dossier',compact('patient'));
    }
    public function pdf($id){
        $patient=Patient::find($id);
        $consultation=$patient->consultation;
        $prescription=$patient->prescription;
        $rdv=$patient->rdv;
        $hospitalisation=$patient->hospitalisation;
        $examen=$patient->examen;
        $pdf=PDF::loadview('dossier.information',compact('patient','consultation','prescription','rdv','hospitalisation','examen'));
     return $pdf->stream();
    }
}
