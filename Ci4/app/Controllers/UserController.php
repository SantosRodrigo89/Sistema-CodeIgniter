<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\EmpresaModel;

class UserController extends BaseController
{
    private string $_base = 'usuarios/';

    public function __construct()
    {
        $this->userModel = new UserModel();
        helper("funcoes");
    }

    public function index()
    {
        $empresaModel = new EmpresaModel();

        $dadosUser = [
            "Usuarios" => $this->userModel->join("empresas","fk_empresas = empresas.id")->findAll(),
            "Empresas" => $empresaModel->findAll()
        ];

        echo view("include/header");
        echo view($this->_base . "index", $dadosUser);
        echo view($this->_base . "Modal/adicionar", $dadosUser);
        echo view("include/footer");
    }

    public function adicionar_usuario()
    {
        $data = [
            'nome' => $_POST["nome"],
            "email" => $_POST["email"],
            "senha" => $_POST["senha"],
            "fk_empresas" => $_POST["empresa"],
        ];

        $this->userModel->insert($data);
        return redirect()->to(base_url("usuarios"));
    }
}