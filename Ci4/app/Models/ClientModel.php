<?php

namespace App\Models;

use CodeIgniter\Model;

class ClientModel extends Model
{
 /*    protected $db;
    public function __construct()
    {
        $this->db = \Config\Database::connect();
    } */

    protected $table = 'clientes';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType = 'array';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

    protected $allowedFields = ["nome", "email", "fk_empresas", "ativo"];

    public function findAllVw($filter = [], $fields = [])
    {

        return  $this->db->table("vw_clientes")->select($fields)->where($filter)->get()->getResultArray();
    }
}
