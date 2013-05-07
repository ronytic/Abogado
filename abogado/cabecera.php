<?php
if(date("Y-m-d")!="2013-01-06"){
   //die(utf8_decode("La versión de Prueba del Software ya Caduco")); exit();
}
?>
</head>
<body>
<div class="container_12 corner-tl corner-tr" id="cabecera">
	<div class="grid_2">
    	<img src="<?php echo $folder;?>imagenes/escudo.gif">
    </div>
	<div class="grid_8">
	
	<h1><?php echo $title;?></h1>
    
    </div>
    <div class="grid_2"><a href="<?php echo $folder;?>administracion/" class="botonazul">Inicio</a></div>
    <div class="clear"></div>
</div>