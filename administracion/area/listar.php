<?php
$folder="../../";
$titulo="Listado de Área";
include_once($folder."funciones/funciones.php");
include_once($folder."cabecerahtml.php");
?>
<?php include_once($folder."cabecera.php");?>
<div class="container_12" id="cuerpo">
	<div class="prefix_4 grid_4">
    	<fieldset>
        	<legend>Criterio de Busqueda</legend>
            <form action="busqueda.php" method="post" id="busqueda">
            	<table class="tablareg">
                	<tr>
                    	<td>
                        	<?php echo campos("Nombre de área:","nombre","text","",1,array("size"=>40));?>
                        </td>
					</tr>
                    <tr>
                    	<td>
                        	<?php echo campos("Buscar","","submit");?>
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </div>
    <div class="clear"></div>
    <div class="prefix_2 grid_8 suffix_2">
    <fieldset>
    	<legend><?php echo $titulo?></legend>
    	<div id="respuesta"></div>
    </fieldset>
    </div>
</div>
<?php include_once($folder."pie.php");?>