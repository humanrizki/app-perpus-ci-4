<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Blog extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'blog_id'=>[
                'type'=>'INT',
                'constraint'=>11,
                'unsigned'=>true,
                'auto_increment'=>true
            ],
            'title'=>[
                'type'=>'VARCHAR',
                'constraint'=>100,
                'not_null'
            ],
            'description'=>[
                'type'=>'TEXT'
            ]
        ]);
        $this->forge->addKey('blog_id',true);
        $this->forge->createTable('blogs');
    }

    public function down()
    {
        //
        $this->forge->dropTable('blogs');
    }
}
