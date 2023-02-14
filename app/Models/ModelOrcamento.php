<?php 

namespace App\Models;

use CodeIgniter\Model;

class ModelOrcamento extends Model
{
    protected $table = 'orcamento';
    protected $primaryKey = 'id_orcamento';
    protected $allowedFields = [
        'dataInsert',
        'dataUpdate',
        'nomeResponsavel',
        'cargoResponsavel',
        'tempoTrabalho',
        'redeSiteEmpresa',
        'paisFone',
        'whatsapp',
        'email',
        'cidade',
        'comoEncontrou',
        'nomeEmpresa',
        'momentoEmpresa',
        'empresaFaz',
        'branding',
        'uiux',
        'socialMedia',
        'objetivoProjeto',
        'pontoContato',
        'quantosColaboradores',
        'orcamentoDisponivel',
        'prazo',
        'informacaoAdicional',
    ];
}