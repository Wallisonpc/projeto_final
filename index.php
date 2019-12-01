<?php
//define('PASTAPROJETO', 'AulaBanco');
define('PASTAPROJETO', 'Projeto_Final_Web');

/* Função criada para retornar o tipo de requisição */
function checkRequest() {
    /* @var $method type */
    $method=$_SERVER['REQUEST_METHOD'];
	switch ($method) {
	  case 'PUT':
	  	$answer = "update";
	    break;
	  case 'POST':	  
	  	$answer = "post";
	    break;
	  case 'GET':
	  	$answer = "get";
	    break;
	  case 'DELETE':
	  	$answer = "delete";
	    break;	
	  default:
	    handle_error($method);  
	    break;
	}
	return $answer;
}

$answer = checkRequest();

$request = $_SERVER['REQUEST_URI']; 
http://localhost:8080/Projeto_Final_Web

// IDENTIFICA A URI DA REQUISIÇÃO


switch ($request) {
    case '/'.Projeto_Final_Web.'/' :
        require __DIR__ . '/api/delete_prestador.php';
        break;
    case '' :
        require __DIR__ . '/api/delete_servico.php';
        break;
    case '' :
        require __DIR__ . '/api/get_prestador.php';
        break;
    case '' :
        require __DIR__ . '/api/get_servico.php';
        break;
    case '' :
        require __DIR__ . '/api/post_prestador.php';
        break;
    case '' :
        require __DIR__ . '/api/post_servico.php';
        break;
    case '' :
        require __DIR__ . '/api/update_prestador.php';
        break;
    case '' :
        require __DIR__ . '/api/update_servico.php';
        break;
    case '/'.PASTAPROJETO.'/Control' :
        require __DIR__ . '/api/'.$answer.'_Prestador.php';
        break;
    case '' :
        require __DIR__ . '/api/'.$answer.'_Servico.php';
        break;
    case '/'.PASTAPROJETO.'/Servico' :
        require __DIR__ . '/api/'.$answer.'_Servico.php';
        break;
    
    default:
        //require __DIR__ . '/api/404.php';
        break;
}