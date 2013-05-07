<?php 
include_once '../class/palabra.php';
$palabra=new palabra;
$Valor=$_POST['Valor'];
foreach($palabra->mostrarTodo("Nombre LIKE '$Valor%' and Visible=1") as $p){
	?>
	<a href="#" class="palabra botonazul" rel="<?php echo $p['CodPalabra'] ?>"><?php echo $p['Nombre'];?></a>
	<?php
}
 ?>