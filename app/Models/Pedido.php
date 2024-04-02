<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'reserva_id',
        'plato_id',
        'cantidad',
        'estado',
    ];

    public function plato()
    {
        return $this->belongsTo(Plato::class);
    }
}
