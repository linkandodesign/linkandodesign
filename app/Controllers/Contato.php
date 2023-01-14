<?php

namespace App\Controllers;

class Contato extends BaseController
{
    public function index()
    {
        $dataHeader['title'] = "Contato - Linkando Design: Identidade Visual - Logo - UI/UX - Social Media #design #marca #logo";
        $dataHome['title'] = "CONTATO";
        echo view('/templates/header', $dataHeader);
        echo view('/templates/banner-subpages', $dataHome);
        echo view('/contato');
        echo view('/templates/footer');
    }
}
