<?php

namespace App\Controllers;

use App\Models\UserModel;

class LoginController extends BaseController
{


    public function __construct()
    {
        helper("funcoes");
    }

    public function index()
    {
        echo view('include/header');
        echo view('/Login/index.php');
    }

    public function login()
    {
        $UserModel = new UserModel();
        $validationEmail = $UserModel->first(["email" => $_POST['email']]);

        if(isset($validationEmail)) 
        {
          if ($validationEmail["senha"] == $_POST["senha"])
          {
            return redirect()->to(base_url(""));
          }
          
          return redirect()->to(base_url("login"));
        }
        return redirect()->to(base_url("login"));
    }
}
