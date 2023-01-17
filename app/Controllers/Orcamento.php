<?php

namespace App\Controllers;

class Orcamento extends BaseController
{
    public function index()
    {
        $dadosHeader['title'] = "Orçamento - Linkando Design: Identidade Visual - Logo - UI/UX - Social Media #design #marca #logo";
        $dadosHeader['active'] = ['home'=>false, 'portfolio'=>false, 'contato'=>false, 'orcamento'=>true, 'duvidas'=>false, 'blog'=>false, 'loja'=>false];
        $dataHome['title'] = "ORÇAMENTO";
        echo view('/templates/header', $dadosHeader);
        echo view('/templates/banner-subpages', $dataHome);
        echo view('/orcamento');
        echo view('/templates/footer');
    }
}
