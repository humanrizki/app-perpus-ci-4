<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BlogSeeder extends Seeder
{
    public function run()
    {
        //
        $model = model('Blog');
        $model->insert([
            'title'=>static::faker()->realText(20),
            'description'=>static::faker()->paragraph(rand(2,6))
        ],2);
    }
}
