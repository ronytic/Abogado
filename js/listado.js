$(document).ready(function(e) {
    $(".cantidad").change(function(){
		var tipo=$(this).attr("rel");
		var valor=$(this).val();
		var precio=$("input[name=precio"+tipo+"]").val();
		var precioparcial=valor*precio;
		precioparcial=precioparcial.toFixed(2);
		$("input[name=total"+tipo+"]").val(precioparcial);
		var preciototal=0;

		$(".pt").each(function(index, element) {
            var preciop=parseFloat($(this).val());
			preciototal+=preciop;
//			alert("asd");
        });
		
		$("#total").val(preciototal.toFixed(2));
	});
});