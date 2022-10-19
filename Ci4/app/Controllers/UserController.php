<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\EmpresaModel;
use CodeIgniter\API\ResponseTrait;

class UserController extends BaseController
{
    use ResponseTrait;
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
            "Usuarios" => $this->userModel->join("empresas", "fk_empresas = empresas.id")->findAll(),
            "Empresas" => $empresaModel->findAll()
        ];
        $js["js"] = view($this->_base . "js/main.js");
        echo view("include/header");
        echo view($this->_base . "index", $dadosUser);
        echo view($this->_base . "Modal/adicionar", $dadosUser);
        echo view("include/footer", $js);
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

    public function get_dados($id = null)
    {
        $userModel = new UserModel();
        return $this->respond($userModel->find(["id" => $id]), 200);
    }
   
    public function editar_usuario()
    {
        $data = [
            'nome' => $_POST["nome"],
            "email" => $_POST["email"],
            "ativo" => $_POST["ativo"],
            "senha" => $_POST["senha"],
            "fk_empresas" => $_POST["empresa"]
        ];

        $this->userModel->update($_POST["id"], $data);
        return redirect()->to(base_url("usuarios"));
    }

    public function deletar_usuario()
    {
        $userModel = new UserModel();
        $userModel->delete($_POST["userid"]);
        return redirect()->to(base_url("clientes"));
    }
}
