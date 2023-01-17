<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $dadosHeader['title'] = "Home - Linkando Design: Identidade Visual - Logo - UI/UX - Social Media #design #marca #logo";
        $dadosHeader['active'] = ['home'=>true, 'portfolio'=>false, 'contato'=>false, 'orcamento'=>false, 'duvidas'=>false, 'blog'=>false, 'loja'=>false];
        $dataHome['title'] = "SOLUÇÕES CRIATIVAS PARA O SEU NEGÓCIO";
        echo view('/templates/header', $dadosHeader);
        echo view('/templates/banner-home', $dataHome);
        echo view('/home');
        echo view('/templates/footer');
    }
}
