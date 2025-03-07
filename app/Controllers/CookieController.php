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
        // $email = "test@gmail.com";
        // $password = "123";

        if ($this->request->getPost('login')) {
            $userEmail = $this->request->getPost('email');
            $userPassword = $this->request->getPost('password');

            if (!empty($userEmail)  && !empty($userPassword) ) {
                if ($this->request->getPost('remember')) {
                    set_cookie("email", $userEmail,120);
                    set_cookie("password", $userPassword, 120);

                    echo "cookie set";
                }
                $this->session->set('email', $userEmail);
                return redirect()->to('postLogin');
                // echo "No input";
            } else {
                echo "Email or password is Invalid";
            }
        } else {
            return redirect()->to('cookiexample');
            // echo "No input 2";
        }
    }

    public function postLogin(){
        // echo "Hello from post login";
        if($this->session->has('email')){
            echo $this->session->get('email');

            echo "</br>";

            if($this->request->getCookie('password') !== null){
                echo $this->request->getCookie('password');
            } else {
                echo "No cookie is set ";
            }
        }
    }
}
