<?php

namespace App\Controllers;

use App\Models\RupModel;

class RupController extends BaseController
{
    private string $_base = 'rup/';

    public function index()
    {
        $rupModel = new RupModel();
        $dadosRup = [
            "Rups" => $rupModel->findAll()
        ];

        return view($this->_base . "index", $dadosRup);
    }

}
