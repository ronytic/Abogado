<?php
if(!empty($_POST)){
	$narchivo="area";
	include_once("../../class/".$narchivo.".php");
	${$narchivo}=new $narchivo;
	extract($_POST);
	$valores=array("Nombre"=>"'$nombre'");
	${$narchivo}->insertar($valores);
	header("Location:listar.php");
}
?>