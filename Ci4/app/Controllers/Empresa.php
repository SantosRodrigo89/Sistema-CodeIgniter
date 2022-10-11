<?php

namespace App\Controllers;

use App\Models\EmpresaModel;

class Empresa extends BaseController
{
    private string $_base = 'empresa/';

    public function index()
    {
        $empresaModel = new EmpresaModel();
        $dadosEmpresa = [
            "empresas" => $empresaModel->findAll()
        ];

        return view($this->_base . "index", $dadosEmpresa);
    }
}
