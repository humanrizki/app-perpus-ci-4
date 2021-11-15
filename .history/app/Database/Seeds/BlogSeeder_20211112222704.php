<?php

namespace App\Database\Seeds;

use App\Models\Blog;
use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Seeder;

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
                'description'=>$faker->paragraph(rand(2,10)),
                'created_at'=>Time::createFromTimestamp($faker->unixTime()),
                'updated_at'=>Time::now()
            ]);
        }
    }
}
