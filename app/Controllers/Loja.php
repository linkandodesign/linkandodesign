<?php

namespace App\Controllers;

class Loja extends BaseController
{
    public function index()
    {
        $dadosHeader['title'] = "Loja - Linkando Design: Identidade Visual - Logo - UI/UX - Social Media #design #marca #logo";
        $dadosHeader['active'] = ['home'=>false, 'portfolio'=>false, 'contato'=>false, 'orcamento'=>false, 'duvidas'=>false, 'blog'=>false, 'loja'=>true];
        $dataHome['title'] = "LOJA";
        echo view('/templates/header', $dadosHeader);
        echo view('/templates/banner-subpages', $dataHome);
        echo view('/loja');
        echo view('/templates/footer');
    }
}
