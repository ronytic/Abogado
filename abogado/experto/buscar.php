<?php
if(!empty($_POST)){
	include_once("../class/palabra.php");
	$palabra=new palabra;
	
	@$CodPalabra=$_POST['CodPalabra'];
	foreach($CodPalabra as $cp){
		if($cp!="")
			$palabras[]=$cp;
	}
	@$pala=$palabras;
	//print_r($palabras);
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
	
	$titulo="Resultado del Sistema Experto";
	$folder="../";	
	include_once("../cabecerahtml.php");
	include_once("../cabecerap.php");
	
	
	?>
    <div class="container_12" id="cuerpo">
    	<div class="grid_12">
        	<fieldset>
            	<legend>Relaciones</legend>
            	<?php
				foreach($pala as $c){
					$pa=$palabra->mostrar($c);
					$pa=array_shift($pa);
					?>
						<a href="palabra.php?p=<?php echo $pa['Nombre'];?>" class="botonnaranja palabra" target="_blank" >
						<?php echo $pa['Nombre'];?>
						</a> + 
					<?php
				}
				?>
            </fieldset>    
        </div>
        <div class="clear"></div>
    	<div class="grid_12">
        	<fieldset>
            	<legend>Resultado</legend>
            	<?php
				foreach($correcto as $c){
					$pa=$palabra->mostrar($c);
					$pa=array_shift($pa);
					?>
						<a href="palabra.php?p=<?php echo $pa['Nombre'];?>" class="botonazul palabra" target="_blank">
						<?php echo $pa['Nombre'];?>
						</a>
					<?php
				}
				?>
            </fieldset>    
        </div>
    </div>	
	
<?php
	include_once("../pie.php");
}
?>