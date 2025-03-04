<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class CookieController extends BaseController
{
    public function index()
    {
        //
    }

    public function validateForm()
    {
        $email = "testemail@gmail.com";
        $password = "123";

        if ($this->request->getPost('login')) {
            $userEmail = $this->request->getPost('email');
            $userPassword = $this->request->getPost('password');

            if ($userEmail == $email && $userPassword == $password) {
                if ($this->request->getPost('remember')) {
                    set_cookie("email", $userEmail,120);
                    set_cookie("password", $userPassword, 120);
                }
                $this->session->set('email', $userEmail);
                return redirect()->to('cookie_example/welcome');
            } else {
                echo "Email or password is Invalid";
            }
        } else {
            return redirect()->to('cookie_example');
        }
    }
}
