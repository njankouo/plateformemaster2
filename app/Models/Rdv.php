<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rdv extends Model
{
    protected $table='rendez_vous';
    use HasFactory;
    public function patient(){
        return $this->belongsTo(Patient::class,'patient_id','id');
    }
}
