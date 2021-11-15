<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MainSeeder extends Seeder
{
    public function run()
    {
        //
        $seeder = \Config\Database::seeder();
        $seeder->call('BlogSeeder');
    }
}
