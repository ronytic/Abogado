<?php
$folder="../";
$titulo="Buscador de Terminos Judiciales";
include_once("../cabecerahtml.php");
?>
<?php include_once("../cabecerap.php");?>
<script language="javascript" src="../js/buscador.js" type="text/javascript"></script>
<div class="container_12" id="cuerpo">
<div class="grid_12 centrar">
<?php for($i="A";$i<="Z";$i++){
	?>
    <a href="#" class=" letra botonrojo" rel="<?php echo $i;?>"><?php echo $i;?></a>
    <?php
	if($i=="Z")break;
}?>
</div>
<div class="clear"></div>
<div class="grid_12">
	<hr />
	<div class="tablareg">
	Palabra a Buscar: <input type="text" name="palabra" id="palabra" placeholder="Palabra a buscar..."/>
    <input type="submit" value="Buscar" id="buscar"/>
    </div>
    <hr />
</div>
<div class="clear"></div>
<div class=" prefix_1 grid_10 suffix_1">
	<div id="respuesta"></div>
</div>
<div class="clear"></div>
<div class=" prefix_1 grid_10 suffix_1" >
	<hr>
	<div id="cuadrocerrar"><a href="#" id="cerrar">Abrir</a> </div>
	<div id="sig" style="display:none;">

		<fieldset>
			<legend id="pal"></legend>
			
			<div id="significado">
			</div>
		</fieldset>		
	</div>
</div>	
<div class="clear"></div>
</div>
<?php include_once("../pie.php");?>
