<?php
// BANCO DE DADOS  CRIAÇÃO
namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;
class Produtos extends Migration
{
    public function up()
    {
        //CAMPOS
        $this->forge->addField([
            'id_produto' => [
                'type' => 'INT',
                'constraint' => 9,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nome' => [
                'type' => 'VARCHAR',
                'constraint' => 128,
            ],
            'descricao' => [
                'type' => 'TEXT',
            ],
            'quantidade' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'quantidade_minima' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'valor_de_compra' => [
                'type' => 'DOUBLE',
            ],
            'valor_de_venda' => [
                'type' => 'DOUBLE',
            ],
            'margem_de_lucro' => [
                'type' => 'DOUBLE',
            ],
            'validade' => [
                'type' => 'DATE',
                'null' => true,
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
        $this->forge->addKey('id_produto', true);

            // TABELA
        $this->forge->createTable('produtos');
    }

    public function down()
    {
        // EXCLUSAO DA TABELA
        $this->forge->dropTable('produtos');
    }
}
