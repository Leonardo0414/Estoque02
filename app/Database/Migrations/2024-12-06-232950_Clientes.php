<?php
// BANCO DE DADOS CRIAÇÃO
namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;
class Clientes extends Migration
{
    public function up()
    {
           //CAMPOS
        $this->forge->addField([
            'id_cliente' =>[
                'type'    =>'INT',
                'constraint' =>9,
                'unsigned' =>true,
                'auto_increment' => true,

            ],  
            'nome'=>[
                'type' =>'VARCHAR',
                'constraint'=>128
            ],

            'data_de_nascimento'=>[
                'type' =>'DATE',
            ],
                        'telefone'=>[
                'type' =>'VARCHAR',
                'constraint'=>32
            ],
                        'endereco'=>[
                'type' =>'VARCHAR',
                'constraint'=>128
            ],
                        'limite_de_credito'=>[
                'type' =>'DOUBLE',
            ],
                'created_at' =>[
                'type' =>'DATETIME'

                ],
            
          'updated_at' =>[
                    'type' =>'DATETIME'

                ],
                          'deleted_at' =>[
                    'type' =>'DATETIME'

                ],
            

        ]);
                // CHAVE PRIMARIA
        $this->forge->addKey('id_cliente',true);
            // TABELA
        $this->forge->createTable('clientes');

    }

    public function down()
    {
            // EXCLUSAO DA TABELA
        $this->forge->dropTable('clientes');
    }
}
