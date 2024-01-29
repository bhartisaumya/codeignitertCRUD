<?php

namespace App\Controllers;

class MyNameController extends BaseController
{
    public function index(): string
    {
        return view('my_name');
    }
}
