<?php

namespace App\Controllers;

class BlogPost extends BaseController
{
    public function index(){
        return view('blog_form');
    }

    public function create($data){
        echo "lksdfhjkn";      
    }
}
