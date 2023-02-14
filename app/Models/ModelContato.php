<?php 

namespace App\Models;

use CodeIgniter\Model;

class ModelContato extends Model
{
    protected $table = 'contato';
    protected $primaryKey = 'id_contato';
    protected $allowedFields = [
        'dataInsert',
        'email',
        'nome',
        'mensagem',
    ];
}