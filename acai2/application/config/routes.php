<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

// Cada rota (a url acessada pelo usuário) faz referência a um método de um controller que carrega aquela página.

// Rota da pagina inicial o index.
$route['default_controller'] = 'Pagina/index';

// Rota da loja.
$route['loja'] = 'Loja/index';

// Rota do carrinho de compras.
$route['carrinho'] = 'Loja/carrinho';

// Rota do login e cadastro.
$route['entrar'] = 'Cliente/index';

// Rota da conta do cliente.
$route['cliente'] = 'Cliente/index';

// Rota do pedido.
$route['pedido_cliente'] = 'Pedido/cliente';

// Rota do pedido.
$route['pedido'] = 'Pedido/index';

// Rota do gerenciamento (abre o login, caso o admin esteja deslogado)
$route['gerenciamento'] = 'Administrador/index';

// Rota com os pedidos do gerenciamento (abertos)
$route['pedido_gerenciamento_abertos'] = 'Pedido/gerenciamento/Aberto';

// Rota com os pedidos do gerenciamento (finalizados)
$route['pedido_gerenciamento_finalizados'] = 'Pedido/gerenciamento/Finalizado';

// Rota com os pedidos do gerenciamento (cancelados)
$route['pedido_gerenciamento_cancelados'] = 'Pedido/gerenciamento/Cancelado';

// Rota com os pedidos do gerenciamento (pagos)
$route['pedido_gerenciamento_pagos'] = 'Pedido/gerenciamento/Pago';

// Rota com o relatorio dos pedidos (abertos)
$route['pedido_relatorio_abertos'] = 'Pedido/relatorio/Aberto';

// Rota com o relatorio dos pedidos (finalizados)
$route['pedido_relatorio_finalizados'] = 'Pedido/relatorio/Finalizado';

// Rota com o relatorio dos pedidos (cancelados)
$route['pedido_relatorio_cancelados'] = 'Pedido/relatorio/Cancelado';

// Rota com o relatorio dos pedidos (pagos)
$route['pedido_relatorio_pagos'] = 'Pedido/relatorio/Pago';

// Rota do cadastro de produto
$route['produto_gerenciamento_cadastro'] = 'Produto/index';

// Rota da manutenção de produtos
$route['produto_gerenciamento_manutencao'] = 'Produto/manutencao';

// Rota da manutenção de clientes
$route['cliente_gerenciamento_manutencao'] = 'Cliente/manutencao';

// Rota do erro 404.
$route['404_override'] = '';

$route['translate_uri_dashes'] = FALSE;
