<?php

namespace App\Controllers\Funcionarios;

use CodeIgniter\Controller;
use App\Models\Funcionario\FuncionarioModel;
//FUNCOES TABELA SALVAR EXCLUR E VER EDITAR 
class Funcionarios extends Controller
{
    private $funcionario_model;

    function __construct()
    {
        $this->funcionario_model = new FuncionarioModel();
    }

    public function index()
    {
        $funcionarios = $this->funcionario_model->findAll();

        $data['funcionarios'] = $funcionarios;

  
    echo view('Templates/header');
    echo view('Funcionarios/index', $data); 
    echo view('Templates/footer');
      
    }

    public function novo()
    {
   
                return view('Templates/header')
            . view('Funcionarios/novo')
            . view('Templates/footer');
    }

    public function store()
    {
        $dados = $this->request->getVar();
        if (isset($dados['id_funcionario'])):
            $this->funcionario_model->where('id_funcionario', $dados['id_funcionario'])->set($dados)->update();
            $session = session();
            $session->setFlashdata('alert', 'sucess_update');
            return redirect()->to("/funcionarios/editar/{$dados['id_funcionario']}");
        endif;
        $this->funcionario_model->insert($dados);
        $session = session();
        $session->setFlashdata('alert', 'sucess_create');
        return redirect()->to('/funcionarios');
    }

    public function editar($id_funcionario)
    {

        $funcionario = $this->funcionario_model->where('id_funcionario', $id_funcionario)->first();
        $data['funcionario'] = $funcionario;
        echo View('templates/header');
        echo View('funcionarios/editar', $data);
        echo View('templates/footer');

    }

    public function excluir()
    {

        $id_funcionario = $this->request->getVar('id_funcionario');
        $this->funcionario_model->where('id_funcionario', $id_funcionario)->delete();
        $session = session();
        $session->setFlashdata('alert', 'sucess_delete');
        return redirect()->to('/funcionarios');

    }

    public function ver($id_funcionario)
    {
        $funcionario = $this->funcionario_model->where('id_funcionario', $id_funcionario)->first();
        $data['funcionario'] = $funcionario;
        echo View('templates/header');
        echo View('funcionarios/ver', $data);
        echo View('templates/footer');
    }
}
