<?php

namespace App\Controllers;

use App\Models\EmpresaModel;
use CodeIgniter\API\ResponseTrait;

class Empresa extends BaseController
{
    use ResponseTrait;
    private string $_base = 'empresa/';

    public function __construct()
    {
        $this->empresaModel = new EmpresaModel();
        helper("funcoes");
    }

    public function index()
    {
        $empresaModel = new EmpresaModel();
        $dadosEmpresa = [
            "empresas" =>  $this->empresaModel->findAll(),
            "titulo" => "Empresas"
        ];
        $js["js"] = view($this->_base . "js/main.js");
        echo view("include/header");
        echo view($this->_base . "index", $dadosEmpresa);
        echo view($this->_base . "Modal/adicionar", $dadosEmpresa);
        echo view($this->_base . "Modal/editar", $dadosEmpresa);
        echo view("include/footer", $js);
    }

    public function adicionar_empresa(string $id = null)
    {
        $data = [
            'cpfcnpj' => $_POST["cpfcnpj"],
            "razao_social" => $_POST["razao_social"],
        ];

        $this->empresaModel->insert($data);
        return redirect()->to(base_url("empresa"));
    }

    public function get_dados(string $id = null)
    {
        $empresaModel = new EmpresaModel();
        return $this->respond($empresaModel->find(["id" => $id]), 200);
    }

    public function editar_empresa()
    {
        $data = [
            'cpfcnpj' => $_POST["cpfcnpj"],
            "razao_social" => $_POST["razao_social"],
            "ativo" => isset($_POST["ativo"]) ? "S" : "N"
        ];

        $this->empresaModel->update($_POST["id"], $data);
        return redirect()->to(base_url("empresa"));
    }

    public function remover_empresa($id = null)
    {
        return $this->respond($this->empresaModel->delete(["id" => $id]), 200);
    }
}
