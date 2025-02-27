<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class NewController extends BaseController
{
    // public function index()
    // {
    //     //
    // }

    public function test()
    {

        session()->set("testSes",123);

        print_r (session()->get('testSes'));


        // return view ('test');
    }
 }
