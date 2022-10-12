<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController
{
    private string $_base = 'usuarios/';

    public function index()
    {
        $userModel = new UserModel();
        $dadosUser = [
            "Usuarios" => $userModel->findAll()
        ];

        echo view("include/header");
        echo view($this->_base . "index", $dadosUser);
        echo view($this->_base . "Modal/adicionar", $dadosUser);
        echo view("include/footer");
    }
}