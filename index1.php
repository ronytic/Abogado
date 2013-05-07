<?php
mysql_connect("localhost","root","");
mysql_select_db("abogado");
$palabras=array(1,2,5);
$p=array_shift($palabras);
$sql="SELECT * FROM relacion WHERE CodPalabra=$p ORDER BY CodResultado";
$res=mysql_query($sql);
$correcto=array();
while($reg=mysql_fetch_array($res)){
	$i=1;
	foreach($palabras as $p){
		$sql2="SELECT * FROM relacion WHERE CodPalabra=$p and CodResultado=".$reg['CodResultado'];
		$res2=mysql_query($sql2);
		if(mysql_num_rows($res2)==0){
			$i=0;
			break;	
		}
	}
	if($i==1){
		array_push($correcto,$reg['CodResultado']);
	}
}

print_r($correcto);
?>