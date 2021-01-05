<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NivelDeUrgencia extends Model
{
    protected $table = 'nivel_de_urgencia';
    public $timestamps = false;

    use SoftDeletes;
    use HasFactory;

    //ToDo: Realizar realcion con el otro model(opcional)
}
