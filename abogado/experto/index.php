<?php
$folder="../";
$titulo="Sistema Experto";
include_once($folder."funciones/funciones.php");
$narchivo="palabra";
include_once("../class/".$narchivo.".php");	
${$narchivo}=new $narchivo;
extract($_GET);
$datos=todolista(${$narchivo}->mostrarTodo(),"CodPalabra","Nombre","");
include_once($folder."cabecerahtml.php");
?>
<?php include_once($folder."cabecerap.php");?>
<div class="container_12" id="cuerpo">
	<div class="prefix_2 grid_8">
    	<fieldset>
        	<legend><?php echo $titulo?></legend>
            <form action="buscar.php" method="post">
            	<table class="tablareg">
                	<?php for($i=0;$i<=4;$i++):?>
                	<tr>
                    	<td>
                        	<?php echo campos("Palabra ".($i*3+1).":","CodPalabra[]","select",$datos,0);?>+
                        </td>
                    	<td>
                        	<?php echo campos("Palabra ".($i*3+2).":","CodPalabra[]","select",$datos,0);?>+
                        </td>
                        <td>
                        	<?php echo campos("Palabra ".($i*3+3).":","CodPalabra[]","select",$datos,0);?>+
                        </td>
					</tr>
                    <?php endfor;?>
                    
                     	
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
</div>
<?php include_once($folder."pie.php");?>