<?php
namespace App\Controllers\Login;  
use App\Models\Login\LoginModel;
use CodeIgniter\Controller;

//FUNCOES DE BUSCAR E AUTENTICAR LOGOUT
class Logins extends Controller
{
    private $login_model;

    public function __construct()
    {
        helper('url');
        $this->login_model = new LoginModel();
    }

    public function index()
    {
        return view('Logins/index');
    }

    public function autenticar()
    {
        $dados = $this->request->getVar();
        $usuario = $this->login_model
            ->where('usuario', $dados['usuario'])
            ->where('senha', md5($dados['senha']))
            ->first();

        $session = session();

        if (!empty($usuario)) { 
            $session->set('primeiro_nome', $usuario['primeiro_nome']);
            $session->setFlashdata('alert', 'success_login');
            return redirect()->to('/inicio');
        }

        $session->setFlashdata('alert', 'error_login');
        return redirect()->to('/login');
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }

    public function trocarSenha()
    {

        echo view('Templates/header');
        echo view('Logins/trocar_senha');    
        echo view('Templates/footer');
    }

 public function store()
{
    $dados = $this->request->getVar();
    $session = session();
    $id_login = 1;

  
    $usuario = $this->login_model->find($id_login);

  
    if ($usuario['senha'] === null) {
        if ($dados['nova_senha'] === $dados['confirmar_nova_senha']) {
            $this->login_model->update($id_login, [
                'senha' => md5($dados['nova_senha'])
            ]);
            
            $session->setFlashdata('alert', 'success_trocar_senha');
            return redirect()->to('/login/trocar_senha');
        }
    } else {

        if (md5($dados['senha_atual']) === $usuario['senha']) {
            if ($dados['nova_senha'] === $dados['confirmar_nova_senha']) {
                $this->login_model->update($id_login, [
                    'senha' => md5($dados['nova_senha'])
                ]);
                
                $session->setFlashdata('alert', 'success_trocar_senha');
                return redirect()->to('/login/trocar_senha');
            }
        }
    }

    $session->setFlashdata('alert', 'error_trocar_senha');
    return redirect()->to('/login/trocar_senha');
}
}