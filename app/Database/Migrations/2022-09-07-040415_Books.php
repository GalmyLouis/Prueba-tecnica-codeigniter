<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Books extends Migration
{
    public function up()
    {
       
        // 'book_id', 'book_name','edition','publication_date','author_id'
       
        $this->forge->addField([
            'book_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
                'null'           => false,
            ],
            'book_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => false,
            ],
            'edition' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => false,
            ],
            'publication_date' => [
                'type' => 'datetime',
                'null' => false,
            ],
            'author_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
                'null'           => false,
            ],
          
            'created_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('book_id', true);
        $this->forge->addForeignKey('author_id', 'authors', 'id', 'CASCADE', 'SET NULL');
        $this->forge->createTable('books');
   
    }

    public function down()
    {
             $this->db->disableForeignKeyChecks();
             $this->forge->dropTable('books');
            $this->db->enableForeignKeyChecks();
    }
}
