<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('include/header');
        echo view('/Home/index.php');
        echo view('include/footer');
    }
}
