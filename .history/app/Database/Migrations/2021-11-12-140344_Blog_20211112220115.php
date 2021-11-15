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
                'auto_increment'=>true,
                'null'=>false
            ],
            'title'=>[
                'type'=>'VARCHAR',
                'constraint'=>100,
                'null'=>false
            ],
            'description'=>[
                'type'=>'TEXT',
                'null'=>false
            ],
            'created_at'=>[
                'type'=>'DATETIME',
                'null'=>true
            ],
            'udpate_at'=>[
                'type'=>'DATETIME',
                'null'=>true
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