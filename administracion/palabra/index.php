<?php
$folder="../../";
$titulo="Registro de Nueva Palabra";
include_once($folder."funciones/funciones.php");
$narchivo="area";
include_once("../../class/".$narchivo.".php");	
${$narchivo}=new $narchivo;
extract($_GET);
$datos=todolista(${$narchivo}->mostrarTodo(),"CodArea","Nombre","");
include_once($folder."cabecerahtml.php");
?>
<?php include_once($folder."cabecera.php");?>
<div class="container_12" id="cuerpo">
	<div class="prefix_2 grid_8">
    	<fieldset>
        	<legend><?php echo $titulo?></legend>
            <form action="guardar.php" method="post">
            	<table class="tablareg">
                <tr>
                    	<td>
                        	<?php echo campos("Área:","CodArea","select",$datos,0);?>
                        </td>
					</tr>
                	<tr>
                    	<td>
                        	<?php echo campos("Palabra:","nombre","text","",1,array("size"=>40,"required"=>"required"));?>
				<?php echo campos("Visible Palabra","visible","select",array("1"=>"si","0"=>"no"),0,"","1");?>
				<?php echo campos("Visible Relación","visiblerelacion","select",array("1"=>"si","0"=>"no"),0,"","0");?>
                        </td>
					</tr>
                    <tr>
                    	<td>
                        	<?php echo campos("Descripción:","descripcion","textarea","",1,array("cols"=>70,"rows"=>25));?>
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