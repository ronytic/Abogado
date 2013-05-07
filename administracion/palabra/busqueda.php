<?php
if(!empty($_POST)){
	extract($_POST);
	$folder="../../";
	$narchivo="palabra";
	include_once("../../class/".$narchivo.".php");
	${$narchivo}=new $narchivo;
	$datos=${$narchivo}->mostrarTodoUnion("area a,palabra p","p.*,a.nombre as NombreArea","p.Nombre","p.Nombre LIKE '%$nombre%' and p.CodArea LIKE '%$CodArea%' and p.CodArea=a.CodArea","p.");
	$titulo=array("Nombre"=>"Nombre de Palabra","NombreArea"=>"Nombre del Área");
	listadotabla($titulo,$datos,1,"modificar.php","eliminar.php","");
}
?>