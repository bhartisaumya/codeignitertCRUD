<?php

namespace App\Controllers;
use App\Models\testModel;

class test extends BaseController
{
    public function index()
    {
        echo "Hey";
    }
    public function create(){
        $newModel = new testModel();
        $jsonEncorded = json_encode(['a', 'b']);

        $newModel->save([
            'image' => $jsonEncorded
        ]);
    }
}
