<?php
// BANCO DE DADOS  CRIAÇÃO
namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;
class Funcionarios extends Migration
{
    public function up()
    {
           //CAMPOS
        $this->forge->addField([
            'id_funcionario' => [
                'type' => 'INT',
                'constraint' => 9,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nome' => [
                'type' => 'VARCHAR',
                'constraint' => 128,
            ],
            'data_de_nascimento' => [
                'type' => 'DATE',
            ],
            'rg' => [
                'type' => 'VARCHAR',
                'constraint' => 32,
            ],
            'cpf' => [
                'type' => 'VARCHAR',
                'constraint' => 32,
            ],
            'telefone' => [
                'type' => 'VARCHAR',
                'constraint' => 15,
            ],
            'endereco' => [
                'type' => 'VARCHAR',
                'constraint' => 128,
            ],
            'data_de_contratacao' => [
                'type' => 'DATE',
            ],
            'cargo' => [
                'type' => 'VARCHAR',
                'constraint' => 32,
            ],
            'salario' => [
                'type' => 'DOUBLE',
            ],
            'dia_de_pagamento' => [
                'type' => 'INT',
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
        $this->forge->addKey('id_funcionario', true);

            // TABELA
        $this->forge->createTable('funcionarios');
    }

    public function down()
    {
         // EXCLUSAO DA TABELA
        $this->forge->dropTable('funcionarios');
    }
}
