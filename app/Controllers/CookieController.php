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

        helper('cookie'); // Ensure cookie helper is loaded

        if ($this->request->getPost('login')) {

            // print_r ($this->request->getPost('remember'));
            // exit();
            
            $userEmail = $this->request->getPost('email');
            $userPassword = $this->request->getPost('password');

            $temp =  0 ;

            $temp =  $this->request->getPost('remember');

            echo "temp=".$temp;

            if (!empty($userEmail)  && !empty($userPassword) ) {
                if ($temp) {
                    echo "Setting Cookies<br>";
                    set_cookie("email", $userEmail,120);
                    set_cookie("password", $userPassword, 120);

                    echo "cookie set";
                }
                $this->session->set('email', $userEmail);

                return view('welcome_message');

                // return redirect()->to('postLogin');
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

            if(get_cookie('password')){
                echo "Cookie Password :- ". get_cookie('password');
            } else {
                echo "No cookie is set ";
            }
    }
    
}
