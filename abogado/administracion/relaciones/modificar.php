<?php
$folder="../../";
$titulo="Modificar Relación";
$narchivo="relacion";
include_once("../../class/".$narchivo.".php");	
${$narchivo}=new $narchivo;
extract($_GET);

$d=${$narchivo}->mostrarUni($id);
$dcopia=$d;
$n1archivo="palabra";
include_once("../../class/".$n1archivo.".php");	
${$n1archivo}=new $n1archivo;
$palabra=todolista(${$n1archivo}->mostrarTodo(),"CodPalabra","Nombre","");

include_once($folder."cabecerahtml.php");
?>
<?php include_once($folder."cabecera.php");?>
<div class="container_12" id="cuerpo">
	<div class="prefix_2 grid_8">
    	<fieldset>
        	<legend><?php echo $titulo?></legend>
            <form action="actualizar.php" method="post">
            	<?php campos("","id","hidden",$id)?>
            	<table class="tablareg">
                	<?php for($i=0;$i<=4;$i++):
					$d1=array_shift($d);
					$d2=array_shift($d);
					$d3=array_shift($d);
					?>
                	<tr>
                    	<td>
                        	<?php echo campos("Palabra ".($i*3+1).":","CodPalabra[]","select",$palabra,0,"",$d1['CodPalabra']);?>+
                        </td>
                    	<td>
                        	<?php echo campos("Palabra ".($i*3+2).":","CodPalabra[]","select",$palabra,0,"",$d2['CodPalabra']);?>+
                        </td>
                        <td>
                        	<?php echo campos("Palabra ".($i*3+3).":","CodPalabra[]","select",$palabra,0,"",$d3['CodPalabra']);?>+
                        </td>
					</tr>
                    <?php endfor;?>
                    <tr>
                    	<td></td>
                        <td>=</td>
                        <td></td>
                    </tr>
                     <td>
                        	<?php echo campos("Resultado:","Resultado","select",$palabra,0,array("required"=>"required"),$dcopia[0]['CodResultado']);?>
                        </td>
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