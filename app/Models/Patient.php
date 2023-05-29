<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{


    use HasFactory;

    protected $fillable=['name','email'];

    public function consultation(){
        return $this->hasMany(Consultation::class);
     }
     public function hospitalisation(){
        return $this->hasMany(Hospitalisation::class);
     }
     public function prescription(){
        return $this->hasMany(Prescription::class);
     }
     public function examen(){
        return $this->hasMany(Examen::class);
     }

     public function rdv(){
        return $this->hasMany(Rdv::class);
     }
}
