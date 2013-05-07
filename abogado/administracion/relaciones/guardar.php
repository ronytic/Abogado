<?php
if(!empty($_POST)){
	$narchivo="relacion";
	include_once("../../class/".$narchivo.".php");
	${$narchivo}=new $narchivo;
	extract($_POST);
	$cantidadmaxima=array_shift(${$narchivo}->unificador());
	$uni=$cantidadmaxima['maximo']+1;
	foreach($CodPalabra as $CodKey=>$CodP){
		if($CodP!=""){
			$valores=array("CodResultado"=>"'$Resultado'",
					"CodPalabra"=>"'$CodP'",
					"Unificador"=>"'$uni'"
					);
//					print_r($valores);
			${$narchivo}->insertar($valores);
		}
	}
	
	header("Location:listar.php");
}
?>