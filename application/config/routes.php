<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';

/*
  <ROTAS AQUI>
  
  Para criar uma rota usa-se a seguinte sintaxe
  
  $route['nome_da_url'] = 'Controller/Nome_da_funcao';
  Exemplos:
  $route['dashboard'] = 'Dashboard';
  $route['dashboard/usuarios'] = 'Dashboard/ListarUsuarios';
  
*/

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
