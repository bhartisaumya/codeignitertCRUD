<?php

namespace App\Controllers;

class UserAuthenticationController extends BaseController
{
    public function index($para1, $para2)
    {
        echo "Parameter1 $para1";
        echo "Parameter2 $para2";
        // return view('signin_page');
    }
}
