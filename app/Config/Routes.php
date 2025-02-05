<?php
use CodeIgniter\Router\RouteCollection;
use Config\Services;
 $routes = Services::routes();

/**
 * @var RouteCollection $routes
 */

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Inicio');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
//ROTAS DE INICIO
$routes->get('/', 'Inicio::index');
$routes->get('inicio', 'Inicio::index');



// FUNCIONARIOS
$routes->get('funcionarios', 'Funcionarios\Funcionarios::index');
$routes->get('funcionarios/novo', 'Funcionarios\Funcionarios::novo');
$routes->get('funcionarios/editar/(:num)', 'Funcionarios\Funcionarios::editar/$1');
$routes->get('funcionarios/ver/(:num)', 'Funcionarios\Funcionarios::ver/$1');
$routes->post('funcionarios/excluir', 'Funcionarios\Funcionarios::excluir');
$routes->post('funcionarios/store', 'Funcionarios\Funcionarios::store');


//CLIENTES
$routes->get('clientes', 'Clientes\Clientes::index');
$routes->get('clientes/novo', 'Clientes\Clientes::novo');
$routes->get('clientes/editar/(:num)', 'Clientes\Clientes::editar/$1');
$routes->get('clientes/ver/(:num)', 'Clientes\Clientes::ver/$1');
$routes->post('clientes/excluir', 'Clientes\Clientes::excluir');
$routes->post('clientes/store', 'Clientes\Clientes::store');

//PRODUTOS
$routes->get('produtos', 'Produtos\Produtos::index');
$routes->get('produtos/novo', 'Produtos\Produtos::novo');
$routes->get('produtos/editar/(:num)', 'Produtos\Produtos::editar/$1');
$routes->get('produtos/ver/(:num)', 'Produtos\Produtos::ver/$1');
$routes->post('produtos/excluir', 'Produtos\Produtos::excluir');
$routes->post('produtos/store', 'Produtos\Produtos::store');

// LOGIN
$routes->get('login', 'Login\Logins::index');
$routes->post('login/autenticar', 'Login\Logins::autenticar');
$routes->get('login/trocar_senha', 'Login\Logins::trocarSenha');
$routes->post('login/store', 'Login\Logins::store');
$routes->get('login/logout', 'Login\Logins::logout');