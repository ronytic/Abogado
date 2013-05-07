<?php
$folder="../";
$titulo="Significado de Palabra";
$narchivo="palabra";
include_once("../class/".$narchivo.".php");	
${$narchivo}=new $narchivo;
extract($_GET);
$datos=${$narchivo}->mostrarTodo("Nombre='$p'");
$datos=array_shift($datos);


$n1archivo="area";
include_once("../class/".$n1archivo.".php");	
${$n1archivo}=new $n1archivo;
extract($_GET);
$areas=todolista(${$n1archivo}->mostrarTodo(),"CodArea","Nombre","");

include_once($folder."funciones/funciones.php");
include_once($folder."cabecerahtml.php");
?>
<?php include_once($folder."cabecera.php");?>
<div class="container_12" id="cuerpo">
	<div class="prefix_2 grid_4">
    	<fieldset>
        	<legend><?php echo $titulo?></legend>
            	<table class="tablareg">
                <tr>
                    	<td>
                        	<?php echo campos("Área:","CodArea","select",$areas,0,array("readonly"=>"readonly","disabled"=>"disabled"),$datos['CodArea']);?>
                        </td>
					</tr>
                	<tr>
                    	<td>
                        	<?php echo campos("Palabra:","nombre","text",$datos['Nombre'],1,array("size"=>40,"readonly"=>"readonly","disabled"=>"disabled"));?>
                        </td>
					</tr>
                    <tr>
                    	<td>
                        	<?php echo campos("Descripción:","descripcion","textarea",$datos['Descripcion'],1,array("cols"=>70,"rows"=>25,"readonly"=>"readonly","disabled"=>"disabled"));?>
                        </td>
					</tr>
                    <tr>
                    	<td>
                        	<input type="submit" value="Cerrar" onclick="window.close();return false;"/>
                        </td>
                    </tr>
                </table>
        </fieldset>
    </div>
    <div class="clear"></div>
</div>
<?php include_once($folder."pie.php");?>