<?php

namespace App\Controllers;

use App\Models\Blog;

class Coba extends BaseController
{
    public function index()
    {
        if($pertama == null){
            $pertama = ["rizki","ganteng","banget"];
        }
        $blogModel = new Blog;
        return view('coba/coba',[
            'field' => $blogModel->findAll()
        ]);
    }
}