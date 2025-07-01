<?php

namespace App\Models;

use CodeIgniter\Model;

class ReservaModel extends Model
{
    protected $table = 'reservas';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'usuario_id', 
        'data', 
        'hora_inicio', 
        'hora_fim', 
        'descricao', 
        'espaco_id'
    ];
    protected $useTimestamps = true;
}
