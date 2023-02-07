<?php

namespace App\Controllers;

use App\Models\ModelOrcamento;

class Orcamento extends BaseController
{

    private $orcamento = '';
    public function __construct()
    {

        $this->orcamento = new ModelOrcamento();
    }

    public function index()
    {
        $dadosHeader['title'] = "Orçamento - Linkando Design: Identidade Visual - Logo - UI/UX - Social Media #design #marca #logo";
        $dadosHeader['active'] = ['home' => false, 'portfolio' => false, 'contato' => false, 'orcamento' => true, 'duvidas' => false, 'blog' => false, 'loja' => false];
        $dataHome['title'] = "ORÇAMENTO";
        echo view('/templates/header', $dadosHeader);
        echo view('/templates/banner-subpages', $dataHome);
        echo view('/orcamento');
        echo view('/templates/footer');
    }

    public function primeiroForm()
    {
        $captcha = $this->request->getJSON()->token;
        $statusForm = $this->request->getJSON()->statusForm;
        // $secret = '6Ld6bzgkAAAAAFh9bHWBuzv9TbwksnKCr5ctAxBu';
        // $url = 'https://www.google.com/recaptcha/api/siteverify';
        // $data1 = array('secret' => $secret, 'response' => $captcha);
        // $ch = curl_init();
        // curl_setopt($ch, CURLOPT_URL, $url);
        // curl_setopt($ch, CURLOPT_POST, true);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($ch, CURLOPT_POSTFIELDS, $data1);
        // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        // $response = curl_exec($ch);
        // curl_close($ch);
        // $status = json_decode($response, true);
        // if ($status['success'] == true) {
        //     $method = $this->request->getMethod(true);
        //     if ($method == 'POST') {
        //         $json = $this->request->getJSON();
        //         $data = [
        //             'nomeResponsavel'  => $json->nomeResponsavel,
        //             'cargoResponsavel' => $json->cargoResponsavel,
        //             'tempoTrabalho'  => $json->tempoTrabalho,
        //             'redeSiteEmpresa'  => $json->redeSiteEmpresa,
        //             'paisFone'  => $json->paisFone,
        //             'whatsapp'  => $json->whatsapp,
        //             'email'  => $json->email,
        //             'cidade'  => $json->cidade,
        //             'comoEncontrou'  => $json->comoEncontrou,
        //         ];
        //         $insert = $this->orcamento->insert($data);
        //         echo json_encode($insert);
        //     }
        // }
    }

    public function buscaContato()
    {
        $method = $this->request->getMethod(true);
        if ($method == 'POST') {
            $json = $this->request->getJSON();
            $this->orcamento->where('paisFone', $json->paisFone);
            $this->orcamento->where('whatsapp', $json->whatsapp);
            $this->orcamento->orWhere('email', $json->email);
            $data = $this->orcamento->find();
            return json_encode($data);
        }
    }

    public function segundoForm()
    {
        // $captcha = $this->request->getJSON()->token;
        // $secret = '6Ld6bzgkAAAAAFh9bHWBuzv9TbwksnKCr5ctAxBu';
        // $url = 'https://www.google.com/recaptcha/api/siteverify';
        // $data1 = array('secret' => $secret, 'response' => $captcha);
        // $ch = curl_init();
        // curl_setopt($ch, CURLOPT_URL, $url);
        // curl_setopt($ch, CURLOPT_POST, true);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($ch, CURLOPT_POSTFIELDS, $data1);
        // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        // $response = curl_exec($ch);
        // curl_close($ch);
        // $status = json_decode($response, true);
        // if ($status['success'] == true) {
        //     $method = $this->request->getMethod(true);
        //     if($method == 'POST'){
        //         $json = $this->request->getJSON();
        //         $orcamento = new ModelOrcamento();
        //         $data = [
        //             'nomeResponsavel'  => $json->nomeResponsavel,
        //             'cargoResponsavel' => $json->cargoResponsavel,
        //             'tempoTrabalho'  => $json->tempoTrabalho,
        //             'redeSiteEmpresa'  => $json->redeSiteEmpresa,
        //             'paisFone'  => $json->paisFone,
        //             'whatsapp'  => $json->whatsapp,
        //             'email'  => $json->email,
        //             'cidade'  => $json->cidade,
        //             'comoEncontrou'  => $json->comoEncontrou,
        //         ];
        //         $orcamento->insert($data);
        //     }
        // }
    }
}
