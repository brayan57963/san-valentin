<?php
// Verifica si existen las variables en la solicitud GET o POST
$controller = $_GET['controller'] ?? 'PochiController'; // Controlador por defecto
$action = $_GET['action'] ?? 'index'; // Acción por defecto

$controllers = array(
	'PochiController' => ['index', 'inicio', 'carta', 'flores', 'galeriaFotos', 'fotos', 'error'],
);

if (isset($controllers[$controller])) {
	if (in_array($action, $controllers[$controller])) {
		call($controller, $action);
	} else {
		call('PochiController', 'error');
	}
} else {
	call('PochiController', 'error');
}

function call($controller, $action)
{
	require_once('controller/' . $controller . '.php');
	switch ($controller) {
		case 'PochiController':
			$controller = new PochiController();
			break;
		default:
			break;
	}
	$controller->{$action}();
}
