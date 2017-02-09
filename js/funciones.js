$(document).ready(function() {
	$('input[name=rut]').blur(function() {
		$('[name="name"]').val("Buscando nombre...");
		var rut = $("input[name=rut]").val();
		$.ajax({
			data: {'rut': rut},
			type: "POST",
			url: "php/buscarNombre.php",
			success: function(data)
			{
				$('[name="name"]').val(data);
			}
		});
	});
});

$(document).ready(function() {
	$('input[name=rutV]').blur(function() {
		$('[name="nameV"]').val("Buscando nombre...");
		var rut = $("input[name=rutV]").val();
		$.ajax({
			data: {'rut': rut},
			type: "POST",
			url: "php/buscarNombre.php",
			success: function(data)
			{
				$('[name="nameV"]').val(data);
			}
		});
	});
});

function limpiarut_(objeto){
	objeto.value=objeto.value.replace("-.","K");
	objeto.value=objeto.value.replace("k","K");
	vDigitosAceptados = '0123456789K*';
	if (objeto.value.substr(0,1) == "0")
	{	
		objeto.value = objeto.value.substr(1,objeto.value.length);
	}
	var texto = objeto.value;
	var salida='';
	for (var x=0; x < texto.length; x++){
		pos = vDigitosAceptados.indexOf(texto.substr(x,1));
		if (pos != -1) salida += texto.substr(x,1);
	}
	if (objeto.value != salida) objeto.value = salida;

	if (objeto.value.slice(0, 1) == "9" || objeto.value.slice(0, 1) == "8" || objeto.value.slice(0, 1) == "7" || objeto.value.slice(0, 1) == "6" || objeto.value.slice(0, 1) == "5" || objeto.value.slice(0, 1) == "4" || objeto.value.slice(0, 1) == "3")
	{
		objeto.value = objeto.value.substr(0, 8);
	}
}