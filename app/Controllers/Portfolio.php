<?php

namespace App\Controllers;

class Portfolio extends BaseController
{
    public function index()
    {
        $dataHeader['title'] = "Portfólio - Linkando Design: Identidade Visual - Logo - UI/UX - Social Media #design #marca #logo";
        $dataHome['title'] = "PORTFÓLIO";
        echo view('/templates/header', $dataHeader);
        echo view('/templates/banner-subpages', $dataHome);
        echo view('/portfolio');
        echo view('/templates/footer');
    }

    public function coopertec()
    {
        $dataHeader['title'] = "CooperTec - Linkando Design: Identidade Visual - Logo - UI/UX - Social Media #design #marca #logo";
        $dataHome['title'] = "PORTFÓLIO";
        echo view('/templates/header', $dataHeader);
        echo view('/templates/banner-subpages', $dataHome);
        echo view('/portfolio/coopertec');
        echo view('/templates/footer');
    }
    
    public function comMaisSaude()
    {
        $dataHeader['title'] = "Com + Saúde - Linkando Design: Identidade Visual - Logo - UI/UX - Social Media #design #marca #logo";
        $dataHome['title'] = "PORTFÓLIO";
        echo view('/templates/header', $dataHeader);
        echo view('/templates/banner-subpages', $dataHome);
        echo view('/portfolio/com-mais-saude');
        echo view('/templates/footer');
    }

    public function nextEngenharia()
    {
        $dataHeader['title'] = "Next Engenharia - Linkando Design: Identidade Visual - Logo - UI/UX - Social Media #design #marca #logo";
        $dataHome['title'] = "PORTFÓLIO";
        echo view('/templates/header', $dataHeader);
        echo view('/templates/banner-subpages', $dataHome);
        echo view('/portfolio/next-engenharia');
        echo view('/templates/footer');
    }

    public function mariahFurlan()
    {
        $dataHeader['title'] = "Mariah Furlan Acessórios - Linkando Design: Identidade Visual - Logo - UI/UX - Social Media #design #marca #logo";
        $dataHome['title'] = "PORTFÓLIO";
        echo view('/templates/header', $dataHeader);
        echo view('/templates/banner-subpages', $dataHome);
        echo view('/portfolio/mariah-furlan');
        echo view('/templates/footer');
    }

    public function xeep()
    {
        $dataHeader['title'] = "Xeep - Linkando Design: Identidade Visual - Logo - UI/UX - Social Media #design #marca #logo";
        $dataHome['title'] = "PORTFÓLIO";
        echo view('/templates/header', $dataHeader);
        echo view('/templates/banner-subpages', $dataHome);
        echo view('/portfolio/xeep');
        echo view('/templates/footer');
    }

    public function mad3ByNerd()
    {
        $dataHeader['title'] = "Mad3 by Nerd - Linkando Design: Identidade Visual - Logo - UI/UX - Social Media #design #marca #logo";
        $dataHome['title'] = "PORTFÓLIO";
        echo view('/templates/header', $dataHeader);
        echo view('/templates/banner-subpages', $dataHome);
        echo view('/portfolio/mad3-by-nerd');
        echo view('/templates/footer');
    }

    public function carlosLima()
    {
        $dataHeader['title'] = "Carlos Lima Design - Linkando Design: Identidade Visual - Logo - UI/UX - Social Media #design #marca #logo";
        $dataHome['title'] = "PORTFÓLIO";
        echo view('/templates/header', $dataHeader);
        echo view('/templates/banner-subpages', $dataHome);
        echo view('/portfolio/carlos-lima');
        echo view('/templates/footer');
    }

    public function castroSimoes()
    {
        $dataHeader['title'] = "Castro e Simões Advocacia - Linkando Design: Identidade Visual - Logo - UI/UX - Social Media #design #marca #logo";
        $dataHome['title'] = "PORTFÓLIO";
        echo view('/templates/header', $dataHeader);
        echo view('/templates/banner-subpages', $dataHome);
        echo view('/portfolio/castro-simoes');
        echo view('/templates/footer');
    }

    public function anaRubinho()
    {
        $dataHeader['title'] = "Ana Rubinho Social Media - Linkando Design: Identidade Visual - Logo - UI/UX - Social Media #design #marca #logo";
        $dataHome['title'] = "PORTFÓLIO";
        echo view('/templates/header', $dataHeader);
        echo view('/templates/banner-subpages', $dataHome);
        echo view('/portfolio/ana-rubinho');
        echo view('/templates/footer');
    }

}
