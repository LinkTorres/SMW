jQuery(document).ready(function($) {

//funcion activa en todo momento
existe_fecha();

});

function  obtener_valor(elemento) {
	var valor=$(elemento).val();
	if(valor=="" || valor===undefined && valor!= null || valor== NaN)
		valor=0;
	return valor;	
		
}

function existe_fecha () {
	
	var fecha_usuario=obtener_valor('#fecha_recoleccion');
   	if(fecha_usuario!=0){
   		$('#nombre').focus();

     $('#hora_recoleccion').html('');
         
         formato = fecha_usuario.split("/");
        fecha = (formato[2].length>3)? formato[2] +"-" + formato[1] +"-" +formato[0] : formato[2] +"-" + formato[0] +"-"+ formato[1];
        $('#iptFR').val(fecha);
        console.log("Valor: "+ fecha);
        onfocus="#fecha_recoleccion";
           $.ajax({
              type:'POST',
              dataType: 'JSON',
              url: 'disponible',
              data: {fecha: fecha},
                success :
                function(data) 
                {   
                  console.log("datos: " + data);
                  for (var i in data) {
                        $('#hora_recoleccion').append('<option value="'+data[i]['id']+'">'+data[i]['hora']+'</option>');  
                        console.log( i + ' - '+data[i]['hora']);
                      }
                },
              complete: 
                  function(){
                    //$(carga).hide('slow');
                  }

            });
	}
}
