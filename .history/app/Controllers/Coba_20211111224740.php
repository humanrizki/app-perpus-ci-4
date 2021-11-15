<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index(...$pertama)
    {
        if($pertama == null){
            $pertama = ["rizki","ganteng","banget"];
        }
        return view('coba/coba',[
            'field' => $pertama
        ]);
    }
}