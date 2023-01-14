<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $dataHeader['title'] = "Home - Linkando Design: Identidade Visual - Logo - UI/UX - Social Media #design #marca #logo";
        $dataHome['title'] = "SOLUÇÕES CRIATIVAS PARA O SEU NEGÓCIO";
        echo view('/templates/header', $dataHeader);
        echo view('/templates/banner-home', $dataHome);
        echo view('/home');
        echo view('/templates/footer');
    }
}
