<?php

namespace App\Controllers;

use App\Models\ClientModel;

class ClientController extends BaseController
{
    private string $_base = 'clientes/';

    public function index()
    {
        $clientModel = new ClientModel();
        $dadosClient = [
            "Clientes" => $clientModel->findAll()
        ];

        echo view("include/header");
        echo view($this->_base . "index", $dadosClient);
        echo view($this->_base . "Modal/adicionar", $dadosClient);
        echo view("include/footer");
    }
}