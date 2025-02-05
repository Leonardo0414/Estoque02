<?php

namespace App\Controllers\Clientes;
use CodeIgniter\Controller;
use App\Models\Cliente\ClienteModel;

class Clientes extends Controller

//FUNCOES TABELA SALVAR EXCLUR E VER EDITAR 
{
private $cliente_model;
    function __construct(){
            $this->cliente_model = new ClienteModel();
    }
        public function index()
{

    $clientes = $this ->cliente_model
    ->findAll();

       $data['clientes'] = $clientes;
       echo View('templates/header');
       echo View('clientes/index',$data);
       echo View('templates/footer');

}
    public function novo()
    {
       echo View('templates/header');
       echo View('clientes/novo');
       echo View('templates/footer');

        return "Novo Cliente";
    }
    
public function store()
{
    $dados = $this->request->getVar();
if(isset($dados['id_cliente'])):
$this->cliente_model->where('id_cliente',$dados['id_cliente'])->set($dados)->update();

     $session = session();
    $session->setFlashdata('alert','success_update');
return redirect()->to("/clientes/editar/{$dados['id_cliente']} ");
endif;
    $this->cliente_model->insert($dados);


    $session = session();
    $session->setFlashdata('alert','success_create');
     return redirect()->to('/clientes');






}
public function editar($id_cliente){
$cliente = $this->cliente_model->where('id_cliente',$id_cliente)->first();
$data['cliente'] = $cliente;
       echo View('templates/header');
       echo View('clientes/editar',$data);
       echo View('templates/footer');
}

public function excluir()
{
    $id_cliente =$this->request->getVar();
    $this->cliente_model->where('id_cliente',$id_cliente)->delete();
     $session = session();
    $session->setFlashdata('alert','sucess_delete');
    return redirect()->to('/clientes');
    return redirect()->to('/clientes/index');
}

public function ver($id_cliente){
    $cliente = $this->cliente_model->where('id_cliente',$id_cliente)->first();
        $data['cliente'] = $cliente;
        echo View('templates/header');
       echo View('clientes/ver',$data);
       echo View('templates/footer');

}


}