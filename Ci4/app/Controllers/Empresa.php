<?php

namespace App\Controllers;

use App\Models\EmpresaModel;

class Empresa extends BaseController
{
    private string $_base = 'empresa/';

    public function __construct()
    {
        helper("funcoes");
    }

    public function index()
    {
        $empresaModel = new EmpresaModel();
        $dadosEmpresa = [
            "empresas" => $empresaModel->findAll(),
            "titulo" => "empresas"
        ];

        /*   return view($this->_base . "index", $dadosEmpresa); */
        echo view("include/header");
        echo view($this->_base . "index", $dadosEmpresa);
        echo view($this->_base . "Modal/adicionar", $dadosEmpresa);
        echo view("include/footer");
    }

    public function adicionar_empresa(string $id = null)
    {
        mDebug($_POST);
    }
}
