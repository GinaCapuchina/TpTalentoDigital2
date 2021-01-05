<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Persona extends Model
{
   protected $table = 'persona';
   public $timestamps = false;
    
   use SoftDeletes;
   use HasFactory;

   public function nivelDeUrgencia(){
            return $this->belongsTo('App\Models\NivelDeUrgencia', 'nivel_de_urgencia_id');
   }
}
