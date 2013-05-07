<?php
if(!empty($_POST)){
	$narchivo="area";
	include_once("../../class/".$narchivo.".php");
	${$narchivo}=new $narchivo;
	extract($_POST);
	$valores=array("Nombre"=>"'$nombre'");
	${$narchivo}->actualizar($valores,$id);
	header("Location:listar.php");
}
?>