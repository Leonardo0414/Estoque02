<?php
// BANCO DE DADOS  CONEXAO
namespace App\Models\Cliente;
use CodeIgniter\Model;
class ClienteModel extends Model
{
  protected $table = 'clientes';
  protected $primaryKey = 'id_cliente';
  protected $allowedFields = [
'id_cliente',
'nome',
'data_de_nascimento',
'telefone',
'endereco',
'limite_de_credito',
  ];

  protected $useTimestamps = true;
  protected $createdField  ='created_at';
  protected $updatedField = 'updated_at';
  protected $deletedField = 'deleted_at';

}