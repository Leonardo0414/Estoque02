<?php

namespace App\Controllers\Produtos;
use CodeIgniter\Controller;
use App\Models\Produto\ProdutoModel;
//FUNCOES TABELA SALVAR EXCLUR E VER EDITAR 
class Produtos extends Controller
{
    private $produto_model;

    public function __construct()
    {
        $this->produto_model = new ProdutoModel();
    }

    public function index()
    {
        $produtos = $this->produto_model->findAll();

        $data['produtos'] = $produtos;
        echo View('Templates/header');
        echo View('Produtos/index', $data);
        echo View('Templates/footer');
    }

    public function novo()
    {
        echo View('Templates/header');
        echo View('Produtos/novo');
        echo View('Templates/footer');
    }

    public function store()
    {
        $dados = $this->request->getVar();

        if (isset($dados['id_produto'])) {
            $this->produto_model->where('id_produto', $dados['id_produto'])->set($dados)->update();

            $session = session();
            $session->setFlashdata('alert', 'sucess_update');
            return redirect()->to("/produtos/editar/{$dados['id_produto']}");
        }

        $this->produto_model->insert($dados);

        $session = session();
        $session->setFlashdata('alert', 'sucess_create');
        return redirect()->to('/produtos');
    }

    public function editar($id_produto)
    {
        $produto = $this->produto_model->where('id_produto', $id_produto)->first();
        $data['produto'] = $produto;

        echo View('templates/header');
        echo View('produtos/editar', $data);
        echo View('templates/footer');
    }

    public function excluir()
    { 
        $id_produto = $this->request->getVar('id_produto');
        $this->produto_model->where('id_produto', $id_produto)->delete();

        $session = session();
        $session->setFlashdata('alert', 'sucess_delete');
        return redirect()->to('/produtos');
    }

    public function ver($id_produto)
    {
        $produto = $this->produto_model->where('id_produto', $id_produto)->first();
        $data['produto'] = $produto;

        echo View('templates/header');
        echo View('produtos/ver', $data);
        echo View('templates/footer');
    }
}
