<?php
require_once 'autoload.php';
require_once 'config/db.php';
require_once 'config/parameters.php';
require_once 'views/layout/header.php';


function showError(){
	$error = new errorController();
	$error->index();
}
 
if(isset($_GET['controller'])){
	$nombre_controlador = $_GET['controller'].'Controller';
 
}elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
	$nombre_controlador = controller_default;
	
}else{
	showError();
	exit();
}
 
if(class_exists($nombre_controlador)){	
	$controlador = new $nombre_controlador();
	
	if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
		$action = $_GET['action'];
		$controlador->$action();
	}elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
		$action_default = action_default;
		$controlador->$action_default();
	}else{
		showError();
	}
}else{
	showError();
}


require_once 'views/layout/content.php';
require_once 'views/layout/footer.php';