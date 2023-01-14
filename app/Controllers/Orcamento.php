<?php

namespace App\Controllers;

class Orcamento extends BaseController
{
    public function index()
    {
        $dataHeader['title'] = "Orçamento - Linkando Design: Identidade Visual - Logo - UI/UX - Social Media #design #marca #logo";
        $dataHome['title'] = "ORÇAMENTO";
        echo view('/templates/header', $dataHeader);
        echo view('/templates/banner-subpages', $dataHome);
        echo view('/orcamento');
        echo view('/templates/footer');
    }
}
