<?php
namespace App\Controllers;

use App\Models\Cliente\ClienteModel;
use App\Models\Funcionario\FuncionarioModel;
use App\Models\Produto\ProdutoModel;
use CodeIgniter\Controller;
//FUNCAO PARA RETORNO DE QUANTIDADES NO INICIO NOS ICONES E GRAFICOS
class Inicio extends Controller
{ 
    private $produto_model;
    private $funcionario_model; 
    private $cliente_model;

    public function __construct()
    {
         helper('url');
        $this->produto_model = new ProdutoModel();
        $this->funcionario_model = new FuncionarioModel();
        $this->cliente_model = new ClienteModel();
    }
    
    public function index()
    {
     
        $total_de_produtos = count($this->produto_model->findAll());
        $total_de_funcionarios = count($this->funcionario_model->findAll());
        $total_de_clientes = count($this->cliente_model->findAll());
        

        $data = [
            'total_de_produtos'      => $total_de_produtos,
            'total_de_funcionarios'  => $total_de_funcionarios,
            'total_de_clientes'      => $total_de_clientes,
        ];
        
        return view('Templates/header')
             . view('Inicio/index', $data)
             . view('Templates/footer');
    }
}
