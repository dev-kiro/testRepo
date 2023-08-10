<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class documentosSidoc extends Model
{
    protected $connection = "mysql2";
    protected $table = "documento";// <-- El nombre personalizado
    // protected $primary_key = 'centro_id';
    protected $primaryKey = 'id';
     
    use HasFactory;
}
