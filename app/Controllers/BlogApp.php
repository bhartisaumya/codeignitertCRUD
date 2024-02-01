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

        $image = $this->request->getFile('image');

        $uniqueName = $this->saveImage($image);

        if($this->request->getMethod() == 'post'){
            $blogModel = new BlogModel();
            $blogModel->save([
                'title' => $title,
                'content' => $content,
                'imageName' => [$uniqueName]
            ]);
        }

        return $this->displayAllBlog(); 





    // // Check if the file exists and is valid
    // if ($image->isValid() && !$image->hasMoved()) {
        // Generate a unique name for the file
        // $newName = $image->getRandomName();
        // echo $newName;

    //     // Move the file to the desired directory
        // $image->move('./uploads', $newName);

    //     // Now you can use $title, $content, and $newName for further processing

    //     // Example: Save data to the database
    //     $blogModel = new BlogModel();
    //     $blogModel->save([
    //         'title' => $title,
    //         'content' => $content,
    //         'image' => $newName, // Save the file name in the database
    //     ]);

    //     return redirect()->to('/blogapp/displayAllBlog');
        // $title = $this->request->getPost('title');
        // $content = $this->request->getPost('content');
    // }

        // if($image)
        //     echo $image;
        // else
        //     echo "Not";
        // echo $image;

        // $uniqueName = $this->saveImage($image);
        // echo $uniqueName;


        // if($this->request->getMethod() == 'post'){
        //     $blogModel = new BlogModel();
        //     $blogModel->save($_POST);
        // }

        // return $this->displayAllBlog();      

    }

    public function displayAllBlog(){
        $blogModel = new BlogModel(); 

        $allBlogData = $blogModel->getBlogData();

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

        $blogModel = new BlogModel();
        $post = $blogModel->find($_id);

        if($post){
            $blogModel->delete($_id);
            return redirect()->to('/blogapp/displayAllBlog');
        }
    }

    public function edit($encryptedId){

        $_id = $this->decryptId($encryptedId);

        $blogModel = new BlogModel();
        $post = $blogModel->find($_id);

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $model = new BlogModel();
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

    protected function saveImage($image, $_id){
        if($image->isValid() && !$image->hasMoved()){
            $uniqueName = $image->getRandomName();
            $image->move('./uploads', $newName);
            return $uniqueName;
        }
        else{
            return "-1";
        }
    }

}
