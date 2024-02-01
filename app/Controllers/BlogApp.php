<?php

namespace App\Controllers;

use App\Models\BlogWithImage;

class BlogApp extends BaseController
{
    public function index(){
        return view('blog_form');
    }

    public function create(){ 
        $title = $this->request->getPost('title');
        $content = $this->request->getPost('content');

        $images = $this->request->getFile('images');

        $uniqueNames = $this->saveImage($images);

        foreach($uniqueNames as $name){
            echo $name;
        }

        if($this->request->getMethod() == 'post'){
            $blogWithImage = new BlogWithImage();
            $blogWithImage->save([
                'title' => $title,
                'content' => $content,
                'imageName' => json_encode($uniqueNames)
            ]);
        }

        return $this->displayAllBlog();    

    }

    public function displayAllBlog(){
        $blogWithImage = new BlogWithImage(); 
        $allBlogData = $blogWithImage->getBlogData();

        // foreach($allBlogData as $one){
        //     echo $one['_id'] . "<br>";
        // }
        

        // encrypting url

        $encrypter = \Config\Services::encrypter();

        $data['blogData'] = $allBlogData;
        $data['encrypter'] = $encrypter;

        return view('display_blogs', $data);
    }

    public function delete($encryptedId){
        // decrypting id

        $_id = $this->decryptId($encryptedId);

        $blogWithImage = new BlogWithImage();
        $post = $blogWithImage->find($_id);

        if($post){
            $blogWithImage->delete($_id);
            return redirect()->to('/blogapp/displayAllBlog');
        }
    }

    public function edit($encryptedId){

        $_id = $this->decryptId($encryptedId);

        $blogWithImage = new BlogWithImage();
        $post = $blogWithImage->find($_id);

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $model = new BlogWithImage();
            $_POST['_id'] = $_id;
            $model->save($_POST);
            return redirect()->to('/blogapp/displayAllBlog');
        }

        $data = [
            'title' => $post['title'],
            'content' => $post['content'],
        ];

        return view('edit_blog_form', $data);
    }

    protected function decryptId($encryptedId){
        $encrypter = \Config\Services::encrypter();

        $decryptedId = $encrypter->decrypt(hex2bin($encryptedId));

        return $decryptedId;
    }

    protected function saveImage($images){
        $uploadedNames = [];
        foreach($images as $image){
            if($image->isValid() && !$image->hasMoved()){
                $name = $image->getRandomName();
                $image->move('./uploads', $name);
                array_push($uploadedNames, $name);
                echo $name;
                // $uploadedNames[] = $uniqueName;
            }

        }
        return $uploadedNames;
    }

}