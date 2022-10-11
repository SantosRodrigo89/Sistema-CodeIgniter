<?php

namespace App\Models;

use CodeIgniter\Model;

class RupModel extends Model
{
    protected $table = 'rup';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType = 'array';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
}