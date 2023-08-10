<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sistrat extends Model
{
    protected $connection = "mysql3";
    protected $table = "centro_ejecutor";// <-- El nombre personalizado
    // protected $primary_key = 'centro_id';
     protected $primaryKey = 'centro_id';
     use HasFactory;
}
