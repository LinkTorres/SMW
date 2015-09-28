window.onload = function ()
{
	
}
jQuery(document).ready(function($) {

//funcion activa en todo momento

	$(".menu a").click(function(){
	    if ($(this).hasClass('activo')){
	        //Cuando se tiene activo no se realiza nada
	 
	    }
	    else
	    {	$(".menu a").removeClass('active');
	        var opc= $(this).data();
	        
	        console.log("opc "+ opc.pos );
	        var dir="";
	        switch(opc.pos){
	        	case 1:
	        		dir="03_dia";
	        		break;
	        	case 2:
	        		dir="04_ordenes";
	        		break;
	        	case 3:
	        		dir="05_historial";
	        		break;		
	        	case 4:
	        		dir="06_lavado";
	        		break;
	        	case 5:
	        		dir="07_planchado";
	        		break;
	        	case 6:
	        		dir="08_clientes";
	        		break;
	        	case 7:
	        		dir="09_correo";
	        		break;	
	        	case 8:
	        		dir="10_correo";
	        		break;	
	        	case 9:
	        		dir="11_orden";
	        		break;					

	        }
	      //traeP(dir);
	       $(this).addClass('active');

	    }
	});

});


function  obtener_valor(elemento) {
	var valor=$(elemento).val();
	if(valor=="" || valor===undefined && valor!= null || valor== NaN || valor==undefined)
		valor=0;
	return valor;	
		
}

function peticion(opcion,solicitud,objetoAactualizar)
{
	$('#mdalCargando').modal('show');
	var dir=["app/view/php/","app/control/ctrl_","app/","app/view/html/"];
	var objeto=["#contenido"];
	if(opcion==0) objetoAactualizar=objeto[opcion];
	$.ajax({
		type: "POST",
		url: dir[opcion]+solicitud,
		success :
			function(data) 
			{ 	
				$(objetoAactualizar).html(data);
				//console.log("datos: "+ data);
			},	
    	complete: 
    		function(){
    			$('#mdalCargando').modal('hide');
    			
    			console.log("dir: " + dir[opcion]+solicitud + "\n\tobjeto: "+ objetoAactualizar);
    		}

    	}).fail(function(jqXHR) {
    		var msjError="";
		if (jqXHR.status === 0) {
               alert('Se perdio la conexión : Verificar la red.');
           } else if (jqXHR.status == 404) {
               alert('No se encontro la página solicitada');
           } else if (jqXHR.status == 500) {
               alert('Internal Server Error [500].');
           } else if (exception === 'parsererror') {
               alert('Requested JSON parse failed.');
           } else if (exception === 'timeout') {
               alert('Se supero el tiempo de espera.');
           } else if (exception === 'abort') {
               alert('Acción Cancelada.');
           } else {
               alert('Uncaught Error: ' + jqXHR.responseText);
           }
           //Escribir modal de error al cargar la pagina
	});
	
	
}


function traeP(dir) {
	peticion(0,dir+".php",0);
}

function refrescar(){
	location.reload();
}

function  mostrarDiv(divM) {
	$(divM).removeClass('hide');
}

function  ocultar(divM) {

	$(divM).addClass('hide');

}

function ocultarDiv(divO,divM){
	$(divO).addClass('hide');
	$(divM).removeClass('hide');

	console.log("m:" + divM + " o: "+ divO);

}


function mostrarOcultar(objeto){
 
 if($(objeto).hasClass('hide')){
 	$(objeto).removeClass('hide').slideDown('slow');

 }
 else
 {
 	$(objeto).slideUp('slow').addClass('hide');
 }

}

function cambiaICono(objeto){
	if( $(objeto).hasClass('glyphicon-menu-right')){
		$(objeto).removeClass('glyphicon-menu-right').addClass('glyphicon-menu-up').slideDown('slow');
 	}
 	else
	{
	 	$(objeto).removeClass('glyphicon-menu-up').addClass('glyphicon-menu-right').slideDown('slow');
	}

}

function pedido_cliente (pos) {
	var nombre =$('#lbl_nombre_'+pos).text();
	console.log("nombre"+ nombre);
	$('#spnNombre').text(nombre);	
	$('#iptPos').val(pos);
}
function tipoServicio () {
	var servicio=obtener_valor('#sctServicio');
	console.log('Servicio ' + servicio);

	ocultar('#divLavado');
	ocultar('#divPlanchado');
	ocultar('#divLavadoPlanchado');

	switch(servicio){
		case 1:
		case '1':
		mostrarDiv('#divLavado');
		break;

		case 2:
		case '2':

		mostrarDiv('#divPlanchado');

		break;

		case 3:
		case '3':
		mostrarDiv('#divLavadoPlanchado');

		break;
	}
}

function mostrarModal (modal) {
	$(modal).modal('show');
}
function remover () {

var obj="#tr_"+obtener_valor('#iptPos');
	$(obj).remove();
}

function cambiaStatus(pos,estatus){
	var frm="";

	console.log('Cambiare el statusss');

	 $('[data-val='+pos+']').prop( "disabled", false );
	console.log($('[data-val='+pos+']'));

	switch(estatus)
	{
		case 2:
			frm ='#frm_'+pos;
		break;

		case 4:
			frm ='#frme_'+pos;
		break;

		case 5:
			frm ='#frm_e'+pos;
		
		break;
	}


	peticiong(estatus,frm);
	

}

function peticiong(opc, datos){
	var direccion="php/SeguimientoController.php?pdg="+opc;
	console.log('direccion' + direccion + "\n"+ datos);

	$.ajax({
		type: "POST",
		url: direccion,
		data: $(datos).serializeArray(),
		success :
			function(data) 
			{  	console.log(" datos: " +data);
				var obj = jQuery.parseJSON(data);
				console.log("obj.r: "+obj.r);

				if(obj.r==1)
				{ //Se guardo correctemente en la base de datos
					
					$(obj.modal).modal('hide');
					$(obj.success).modal('show');
				}		
					

			},
			
    	complete: 
    		function(){
    			//ocultarDiv("#divCargando");
    			}
		}).fail(function() {
			alert( "error" );
		});
console.log("url:" +direccion+" ");

}
