<?php
$folder="../../";
$titulo="Modificar Área";
$narchivo="area";
include_once("../../class/".$narchivo.".php");	
${$narchivo}=new $narchivo;
extract($_GET);
$datos=${$narchivo}->mostrar($id);
$datos=array_shift($datos);
include_once($folder."funciones/funciones.php");
include_once($folder."cabecerahtml.php");
?>
<?php include_once($folder."cabecera.php");?>
<div class="container_12" id="cuerpo">
	<div class="prefix_4 grid_4">
    	<fieldset>
        	<legend><?php echo $titulo?></legend>
            <form action="actualizar.php" method="post">
            	<?php campos("","id","hidden",$id)?>
            	<table class="tablareg">
                	<tr>
                    	<td>
                        	<?php echo campos("Nombre de área:","nombre","text",$datos['Nombre'],1,array("size"=>40));?>
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