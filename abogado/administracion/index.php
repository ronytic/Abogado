<?php
$folder="../";
$titulo="Administración del Sistema";
include_once("../cabecerahtml.php");
?>
<?php include_once("../cabecera.php");?>
<div class="container_12" id="cuerpo">
	<div class="grid_4">
    	<a href="area/" class="botonazul">REGISTRAR ÁREA</a>
        <a href="area/listar.php" class="botonazul">LISTAR ÁREA</a>
    </div>
    <div class="grid_4">
    	<a href="palabra/" class="botonnaranja">REGISTRAR PALABRA</a>
        <a href="palabra/listar.php" class="botonnaranja">LISTAR PALABRAS</a>
    </div>
    <div class="grid_4">
    	<a href="relaciones/" class="botonrojo">REGISTRAR RELACIONES</a>
        <a href="relaciones/listar.php" class="botonrojo">LISTAR RELACIONES</a>
    </div>
    <div class="clear"></div>
</div>
<?php include_once("../pie.php");?>