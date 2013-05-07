<?php
include_once("db2.php");
class relacion extends  bd{
	function unificador(){
		$this->campos=array("Max(Unificador) as maximo");
		return $this->getRecords("Activo=1");
	}
	function busqueda($CodResultado){
		//echo "SELECT * FROM ".$this->tabla." GROUP BY Unificador HAVING CodResultado LIKE '%$CodResultado%' and Activo=1";
		return $this->sql("SELECT r.Unificador,r.*,p.*,count(r.Unificador) as cantidad FROM relacion r,palabra p WHERE  r.CodResultado=p.CodPalabra and r.Activo=1 GROUP BY r.Unificador HAVING r.CodResultado LIKE '%$CodResultado%' ");
	}
	function mostrarUni($CodResultado){
//		echo "SELECT r.* FROM relacion r WHERE  r.Unificador LIKE '$CodResultado' and r.Activo=1";
		$this->campos=array("*");
		return $this->sql("SELECT r.* FROM relacion r WHERE  r.Unificador LIKE '$CodResultado' and r.Activo=1");
	}
	function eliminar($Cod){
		$this->updateRow(array("Activo"=>0),"Unificador=$Cod");	
	}
}
?>