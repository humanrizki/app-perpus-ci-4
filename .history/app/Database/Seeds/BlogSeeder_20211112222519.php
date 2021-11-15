<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\Blog;
class BlogSeeder extends Seeder
{
    public function run()
    {
        //
        $blog = new Blog;
        $faker = \Faker\Factory::create();
        for($i = 1; $i <= 10; $i++){
            $blog->save([
                'title'=>$faker->realText(40),
                'description'=>$faker->paragraph(rand(2,10))
            ]);
        }
    }
}
