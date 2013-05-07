<?php 
include_once '../class/palabra.php';
if(!empty($_POST)){
	include_once("../funciones.php");
	$palabra=new palabra;
	$CodPalabra=$_POST['CodPalabra'];
	$p=$palabra->mostrar($CodPalabra);
	$p=array_shift($p);
	$datos=array();
	foreach($palabra->mostrarTodo() as $pal){
		array_push($datos,$pal['Nombre']);
	}
	echo resaltar($p['Descripcion'],$datos);
	
}
 ?>