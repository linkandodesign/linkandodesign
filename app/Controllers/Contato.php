<?php

namespace App\Controllers;

class Contato extends BaseController
{
    public function index()
    {
        $dadosHeader['title'] = "Contato - Linkando Design: Identidade Visual - Logo - UI/UX - Social Media #design #marca #logo";
        $dadosHeader['active'] = ['home'=>false, 'portfolio'=>false, 'contato'=>true, 'orcamento'=>false, 'duvidas'=>false, 'blog'=>false, 'loja'=>false];
        $dataHome['title'] = "CONTATO";
        echo view('/templates/header', $dadosHeader);
        echo view('/templates/banner-subpages', $dataHome);
        echo view('/contato');
        echo view('/templates/footer');
    }
}
