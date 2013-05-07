<?php
if(!empty($_POST)){
	extract($_POST);
	$folder="../../";
	$narchivo="relacion";
	include_once("../../class/".$narchivo.".php");
	${$narchivo}=new $narchivo;
	$datos=${$narchivo}->busqueda($CodResultado);
	$titulo=array("Nombre"=>"Nombre de la Relación","cantidad"=>"Cantidad de Palabras en la Relación");
	listadotabla($titulo,$datos,1,"modificar.php","eliminar.php","");
}
?>