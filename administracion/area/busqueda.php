<?php
if(!empty($_POST)){
	extract($_POST);
	$folder="../../";
	$narchivo="area";
	include_once("../../class/".$narchivo.".php");
	${$narchivo}=new $narchivo;
	$datos=${$narchivo}->mostrarTodo("Nombre LIKE '%$nombre%'");
	$titulo=array("Nombre"=>"Nombre de Área");
	listadotabla($titulo,$datos,1,"modificar.php","eliminar.php","");
}
?>