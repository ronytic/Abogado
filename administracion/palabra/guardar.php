<?php
if(!empty($_POST)){
	$narchivo="palabra";
	include_once("../../class/".$narchivo.".php");
	${$narchivo}=new $narchivo;
	extract($_POST);
	$valores=array("Nombre"=>"'$nombre'",
					"CodArea"=>"'$CodArea'",
					"Descripcion"=>"'$descripcion'",
					"Visible"=>"$visible",
					"VisibleRelacion"=>"$visiblerelacion"
					);
	${$narchivo}->insertar($valores);
	header("Location:listar.php");
}
?>