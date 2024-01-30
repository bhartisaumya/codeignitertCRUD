<?php

namespace App\Controllers;

use App\Models\BlogModel;


class BlogApp extends BaseController
{
    public function index(){
        return view('blog_form');
    }

    public function create(){
        $title = $this->request->getPost('title');
        $content = $this->request->getPost('content');

        if($this->request->getMethod() == 'post'){
            $model = new BlogModel();
            $model->save($_POST);
        }

        return view('display_blogs', [$title, $content]);
        

        // Display the values (you can modify this to suit your needs)
        // echo "Title: $title<br>";
        // echo "Content: $content";
        // echo $_POST;      
    }
}
