<?php

namespace App\Controllers;

use App\Models\ModelContato;

class Contato extends BaseController
{

    private $contato = '';
    public function __construct()
    {

        $this->contato = new ModelContato();
    }

    public function index()
    {
        $dadosHeader['title'] = "Contato - Linkando Design: Identidade Visual - Logo - UI/UX - Social Media #design #marca #logo";
        $dadosHeader['active'] = ['home' => false, 'portfolio' => false, 'contato' => true, 'orcamento' => false, 'duvidas' => false, 'blog' => false, 'loja' => false];
        $dataHome['title'] = "CONTATO";
        echo view('/templates/header', $dadosHeader);
        echo view('/templates/banner-subpages', $dataHome);
        echo view('/contato');
        echo view('/templates/footer');
    }

    public function formContato()
    {
        $captcha = $this->request->getJSON()->token;
        $secret = '6Ld6bzgkAAAAAFh9bHWBuzv9TbwksnKCr5ctAxBu';
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data1 = array('secret' => $secret, 'response' => $captcha);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        $response = curl_exec($ch);
        curl_close($ch);
        $status = json_decode($response, true);
        if ($status['success'] == true) {
            $method = $this->request->getMethod(true);
            if ($method == 'POST') {
                $json = $this->request->getJSON();
                if ($json->emailContato && $json->mensagemContato) {
                    if (!filter_var($json->emailContato, FILTER_VALIDATE_EMAIL)) {
                        echo json_encode('{"status":"error", "text":"E-mail inválido!"}');
                        return;
                    }
                    $data = [
                        'dataInsert' => date('Y-m-d'),
                        'email' => $json->emailContato,
                        'nome'  => $json->nomeContato,
                        'mensagem'  => $json->mensagemContato,
                    ];
                    try {
                        $this->contato->insert($data);
                        echo json_encode('{"status":"ok", "text":"Boa! Sua mensagem foi encaminhada para nossa equipe de atendimento, dentro de até 48 horas entraremos em contato!"}');
                        return;
                    } catch (\Exception $e) {
                        echo json_encode('{"status":"error", "text":"Houve um erro ao cadastrar contato!"}');
                        return;
                    }
                } else {
                    echo json_encode('{"status":"error", "text":"Preencha todos os campos obrigatórios!"}');
                    return;
                }
            }
        }
    }
}
