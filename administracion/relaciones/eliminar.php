<?php
if(!empty($_GET)){
	$narchivo="relacion";
	include_once("../../class/".$narchivo.".php");	
	${$narchivo}=new $narchivo;
	extract($_GET);
	${$narchivo}->eliminar($id);
}
?>