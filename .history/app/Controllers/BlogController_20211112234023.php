<?php

namespace App\Controllers;

use App\Models\Blog;

class Coba extends BaseController
{
    public function index()
    {
        
        $blogModel = new Blog;
        return view('coba/coba',[
            'field' => $blogModel->findAll()
        ]);
    }
    public function show($id){
        $blogModel = new Blog;
        return view('coba/coba',[
            'field'=> $blogModel->where('blog_id',$id)->find()
        ]);
    }
}