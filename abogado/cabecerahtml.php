<?php
include_once($folder."config.php");
if(empty($titulo)){$titulo=""; }
if(date("Y-m-d")!="2013-01-06"){
   //die(utf8_decode("La versión de Prueba del Software ya Caduco")); exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!--Sistema Desarrollador por Ronald Nina Layme-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.::<?php echo $titulo?> | <?php echo $title?>::.</title>
<link href="<?php echo $folder?>css/960/960.css" type="text/css" rel="stylesheet" media="all"/>
<link href="<?php echo $folder?>css/core.css" type="text/css" rel="stylesheet" media="all"/>
<!--<link href="<?php echo $folder?>css/stylemenu.css" type="text/css" rel="stylesheet" media="all"/>-->
<link rel="stylesheet" type="text/css" href="<?php echo $folder?>css/ui/jquery.ui.all.css"/>
<link rel="shortcut icon" href="<?php echo $folder?>images/abogado.ico" />
<!--Sistema Desarrollador por Ronald Nina Layme-->
<script language="javascript" type="application/javascript" src="<?php echo $folder?>js/jquery.js"></script>
<!--<script language="javascript" type="application/javascript" src="<?php echo $folder;?>js/jquery.nicescroll.min.js"></script>
<script language="javascript" type="application/javascript" src="<?php echo $folder?>js/ui/jquery.ui.core.js"></script>
<script language="javascript" type="application/javascript" src="<?php echo $folder?>js/ui/jquery.ui.datepicker.js"></script>-->
<script language="javascript" type="application/javascript" src="<?php echo $folder?>js/jquery.form.js"></script>
<script language="javascript" type="application/javascript" src="<?php echo $folder?>js/busquedas/busquedas.js"></script>