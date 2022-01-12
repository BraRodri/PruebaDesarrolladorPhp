<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table = 'client';

    protected $fillable = [
        'tipo_documento', 'numero_documento', 'nombre'
    ];

    public function listaPagos(){
        return $this->hasMany(ListaPagos::class, 'client_id');
    }
}
