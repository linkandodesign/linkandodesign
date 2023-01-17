<?php

namespace App\Controllers;

class Portfolio extends BaseController
{
    public function index()
    {
        $dadosHeader['title'] = "Portfólio - Linkando Design: Identidade Visual - Logo - UI/UX - Social Media #design #marca #logo";
        $dadosHeader['active'] = ['home'=>false, 'portfolio'=>true, 'contato'=>false, 'orcamento'=>false, 'duvidas'=>false, 'blog'=>false, 'loja'=>false];
        $dataHome['title'] = "PORTFÓLIO";
        echo view('/templates/header', $dadosHeader);
        echo view('/templates/banner-subpages', $dataHome);
        echo view('/portfolio');
        echo view('/templates/footer');
    }

    public function coopertec()
    {
        $dadosHeader['title'] = "CooperTec - Linkando Design: Identidade Visual - Logo - UI/UX - Social Media #design #marca #logo";
        $dadosHeader['active'] = ['home'=>false, 'portfolio'=>true, 'contato'=>false, 'orcamento'=>false, 'duvidas'=>false, 'blog'=>false, 'loja'=>false];
        $dataHome['title'] = "PORTFÓLIO";
        echo view('/templates/header', $dadosHeader);
        echo view('/templates/banner-subpages', $dataHome);
        echo view('/portfolio/coopertec');
        echo view('/templates/footer');
    }
    
    public function comMaisSaude()
    {
        $dadosHeader['title'] = "Com + Saúde - Linkando Design: Identidade Visual - Logo - UI/UX - Social Media #design #marca #logo";
        $dadosHeader['active'] = ['home'=>false, 'portfolio'=>true, 'contato'=>false, 'orcamento'=>false, 'duvidas'=>false, 'blog'=>false, 'loja'=>false];
        $dataHome['title'] = "PORTFÓLIO";
        echo view('/templates/header', $dadosHeader);
        echo view('/templates/banner-subpages', $dataHome);
        echo view('/portfolio/com-mais-saude');
        echo view('/templates/footer');
    }

    public function nextEngenharia()
    {
        $dadosHeader['title'] = "Next Engenharia - Linkando Design: Identidade Visual - Logo - UI/UX - Social Media #design #marca #logo";
        $dadosHeader['active'] = ['home'=>false, 'portfolio'=>true, 'contato'=>false, 'orcamento'=>false, 'duvidas'=>false, 'blog'=>false, 'loja'=>false];
        $dataHome['title'] = "PORTFÓLIO";
        echo view('/templates/header', $dadosHeader);
        echo view('/templates/banner-subpages', $dataHome);
        echo view('/portfolio/next-engenharia');
        echo view('/templates/footer');
    }

    public function mariahFurlan()
    {
        $dadosHeader['title'] = "Mariah Furlan Acessórios - Linkando Design: Identidade Visual - Logo - UI/UX - Social Media #design #marca #logo";
        $dadosHeader['active'] = ['home'=>false, 'portfolio'=>true, 'contato'=>false, 'orcamento'=>false, 'duvidas'=>false, 'blog'=>false, 'loja'=>false];
        $dataHome['title'] = "PORTFÓLIO";
        echo view('/templates/header', $dadosHeader);
        echo view('/templates/banner-subpages', $dataHome);
        echo view('/portfolio/mariah-furlan');
        echo view('/templates/footer');
    }

    public function xeep()
    {
        $dadosHeader['title'] = "Xeep - Linkando Design: Identidade Visual - Logo - UI/UX - Social Media #design #marca #logo";
        $dadosHeader['active'] = ['home'=>false, 'portfolio'=>true, 'contato'=>false, 'orcamento'=>false, 'duvidas'=>false, 'blog'=>false, 'loja'=>false];
        $dataHome['title'] = "PORTFÓLIO";
        echo view('/templates/header', $dadosHeader);
        echo view('/templates/banner-subpages', $dataHome);
        echo view('/portfolio/xeep');
        echo view('/templates/footer');
    }

    public function mad3ByNerd()
    {
        $dadosHeader['title'] = "Mad3 by Nerd - Linkando Design: Identidade Visual - Logo - UI/UX - Social Media #design #marca #logo";
        $dadosHeader['active'] = ['home'=>false, 'portfolio'=>true, 'contato'=>false, 'orcamento'=>false, 'duvidas'=>false, 'blog'=>false, 'loja'=>false];
        $dataHome['title'] = "PORTFÓLIO";
        echo view('/templates/header', $dadosHeader);
        echo view('/templates/banner-subpages', $dataHome);
        echo view('/portfolio/mad3-by-nerd');
        echo view('/templates/footer');
    }

    public function carlosLima()
    {
        $dadosHeader['title'] = "Carlos Lima Design - Linkando Design: Identidade Visual - Logo - UI/UX - Social Media #design #marca #logo";
        $dadosHeader['active'] = ['home'=>false, 'portfolio'=>true, 'contato'=>false, 'orcamento'=>false, 'duvidas'=>false, 'blog'=>false, 'loja'=>false];
        $dataHome['title'] = "PORTFÓLIO";
        echo view('/templates/header', $dadosHeader);
        echo view('/templates/banner-subpages', $dataHome);
        echo view('/portfolio/carlos-lima');
        echo view('/templates/footer');
    }

    public function castroSimoes()
    {
        $dadosHeader['title'] = "Castro e Simões Advocacia - Linkando Design: Identidade Visual - Logo - UI/UX - Social Media #design #marca #logo";
        $dadosHeader['active'] = ['home'=>false, 'portfolio'=>true, 'contato'=>false, 'orcamento'=>false, 'duvidas'=>false, 'blog'=>false, 'loja'=>false];
        $dataHome['title'] = "PORTFÓLIO";
        echo view('/templates/header', $dadosHeader);
        echo view('/templates/banner-subpages', $dataHome);
        echo view('/portfolio/castro-simoes');
        echo view('/templates/footer');
    }

    public function anaRubinho()
    {
        $dadosHeader['title'] = "Ana Rubinho Social Media - Linkando Design: Identidade Visual - Logo - UI/UX - Social Media #design #marca #logo";
        $dadosHeader['active'] = ['home'=>false, 'portfolio'=>true, 'contato'=>false, 'orcamento'=>false, 'duvidas'=>false, 'blog'=>false, 'loja'=>false];
        $dataHome['title'] = "PORTFÓLIO";
        echo view('/templates/header', $dadosHeader);
        echo view('/templates/banner-subpages', $dataHome);
        echo view('/portfolio/ana-rubinho');
        echo view('/templates/footer');
    }

}
