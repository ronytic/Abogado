<?php
if(!empty($_POST)){
	$narchivo="palabra";
	include_once("../../class/".$narchivo.".php");
	${$narchivo}=new $narchivo;
	extract($_POST);
	$valores=array("Nombre"=>"'$nombre'",
					"CodArea"=>"'$CodArea'",
					"Descripcion"=>"'$descripcion'"
					);
	${$narchivo}->insertar($valores);
	header("Location:listar.php");
}
?>