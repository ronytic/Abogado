<?php
$folder="../../";
$titulo="Registro de Área";
include_once($folder."funciones/funciones.php");
include_once($folder."cabecerahtml.php");
?>
<?php include_once($folder."cabecera.php");?>
<div class="container_12" id="cuerpo">
	<div class="prefix_4 grid_4">
    	<fieldset>
        	<legend><?php echo $titulo?></legend>
            <form action="guardar.php" method="post">
            	<table class="tablareg">
                	<tr>
                    	<td>
                        	<?php echo campos("Nombre de área:","nombre","text","",1,array("size"=>40,"required"=>"required"));?>
                        </td>
					</tr>
                    <tr>
                    	<td>
                        	<?php echo campos("Guardar","","submit");?>
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </div>
    <div class="clear"></div>
</div>
<?php include_once($folder."pie.php");?>