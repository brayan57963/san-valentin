<?php
// require_once('db_Connection.php');

date_default_timezone_set('America/Bogota');
//setlocale(LC_TIME, "es_ES.utf8"); // Configura el locale a Español
// session_start();

if (isset($_GET['controller']) && isset($_GET['action'])) {
	if (
		isset($_SESSION['usuario']) or ($_GET['controller'] == 'PochiController' and $_GET['action'] == 'login')
		or ($_GET['controller'] == 'PochiController' and $_GET['action'] == 'index')
		or ($_GET['controller'] == 'PochiController' and $_GET['action'] == 'cerrarSesion')
	) {
		$controller = $_GET['controller'];
		$action = $_GET['action'];
	} // else {
	// 	echo "<script>
	// 		alert('PRIMERO DEBE INICIAR SESION');
	// 		window.location='?controller=PochiController&action=cerrarSesion';
	// 		</script>";
	// }
} else {
	$controller = 'PochiController';
	$action = 'index';
}
require_once('routing.php');
