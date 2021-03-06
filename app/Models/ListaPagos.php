<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListaPagos extends Model
{
    use HasFactory;
    protected $table = 'lista_pago';

    protected $fillable = [
        'client_id', 'num_plan', 'valor', 'vencimiento', 'vigencia'
    ];
}
