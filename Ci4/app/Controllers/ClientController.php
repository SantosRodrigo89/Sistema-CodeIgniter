<?php

namespace App\Controllers;

use App\Models\ClientModel;
use App\Models\EmpresaModel;
use CodeIgniter\API\ResponseTrait;

class ClientController extends BaseController
{
    use ResponseTrait;
    private string $_base = 'clientes/';

    public function __construct()
    {
        $this->clientModel = new ClientModel();
        helper("funcoes");
    }

    public function index()
    {
        $empresaModel = new EmpresaModel();
        $dadosClient = [
            "Clientes" => $this->clientModel->findAllVw(),
            /* select(["cl.id", "cl.nome", "cl.email", "em.razao_social"])->join("empresas em", "cl.fk_empresas = em.id")->findAll(), */
            "Empresas" => $empresaModel->findAll()
        ];

        $js["js"] = view($this->_base . "js/main.js");
        echo view("include/header");
        echo view($this->_base . "index", $dadosClient);
        echo view($this->_base . "Modal/editar", $dadosClient);
        echo view($this->_base . "Modal/adicionar", $dadosClient);
        echo view("include/footer", $js);
    }

    public function adicionar_cliente()
    {
        $data = [
            'nome' => $_POST["nome"],
            "email" => $_POST["email"],
            "ativo" => isset($_POST["ativo"]) ? "S" : "N",
            "fk_empresas" => $_POST["empresa"],
        ];

        $this->clientModel->insert($data);
        return redirect()->to(base_url("clientes"));
    }

    public function get_dados($id = null)
    {
        $clientModel = new ClientModel();
        return $this->respond($clientModel->find(["id" => $id]), 200);
    }

    public function editar_cliente()
    {
        $data = [
            'nome' => $_POST["nome"],
            "email" => $_POST["email"],
            "ativo" => isset($_POST["ativo"]) ? "S" : "N",
            "fk_empresas" => $_POST["empresa"]
        ];

        $this->clientModel->update($_POST["id"], $data);
        return redirect()->to(base_url("clientes"));
    }

    public function deletar_cliente()
    {
        $clientModel = new ClientModel();
        $clientModel->delete($_POST["clienteid"]);
        return redirect()->to(base_url("clientes"));
    }
}
