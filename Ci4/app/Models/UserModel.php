<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType = 'array';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

    protected $allowedFields = ["nome", "email", "senha", "fk_empresas", "ativo"];

    public function findAllVw($filter = [], $fields = [])
    {

        return  $this->db->table("vw_usuarios")->select($fields)->where($filter)->get()->getResultArray();
    }
}