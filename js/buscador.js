$(document).ready(function(e) {
    $(".letra").click(function(e) {
        var  valor=$(this).attr("rel");
		$.post("buscar.php",{"Valor":valor},respuesta)
		e.preventDefault();
		e.stopPropagation()
		return false;
    });
	$("#buscar").click(function(e) {
        var  valor=$("#palabra").val();
		$.post("buscar.php",{"Valor":valor},respuesta)
		e.preventDefault();
		e.stopPropagation()
		return false;
    });
	function respuesta(data){
		$("div#respuesta").html(data);	
	}
	$("div#respuesta").on("click",".palabra",buscarsig);
	function buscarsig(e){
		var Valor=$(this).html();
		var CodPalabra=$(this).attr("rel");
		$("#pal").html("Significado de "+Valor);
		$.post("buscarsignificado.php",{"CodPalabra":CodPalabra},function(data){
			$("#significado").html(data);
			abrir();
		});
		
		e.preventDefault();
		e.stopPropagation();
	}

	$("#cerrar").toggle(abrir,cerrar);
	function cerrar(){
		$(this).html("Abrir");
		$("#sig").slideUp();
	}
	function abrir(){
		$(this).html("Cerrar");
		$("#sig").slideDown();
	}
});