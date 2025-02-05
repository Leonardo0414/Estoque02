<?php
// BANCO DE DADOS  CRIAÇÃO
namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;
class Logins extends Migration
{
    public function up()
    {
         //CAMPOS
        $this->forge->addField([
            'id_login' => [
                'type' => 'INT',
                'constraint' => 9,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'usuario' => [
                'type' => 'VARCHAR',
                'constraint' => 128,
            ],
            'senha' => [
                'type' => 'VARCHAR',
                'constraint' => 128,
            ],
             'primeiro_nome' => [
                'type' => 'VARCHAR',
                'constraint' => 128,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        // CHAVE PRIMARIA
        $this->forge->addKey('id_login', true);

        // TABELA
        $this->forge->createTable('logins');
    }
    
      // EXCLUSAO DA TABELA
    public function down()
    {
        $this->forge->dropTable('logins');
    }
}
