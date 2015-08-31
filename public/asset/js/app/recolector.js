

function  obtener_valor(elemento) {
	var valor=$(elemento).val();
	if(valor=="" || valor===undefined && valor!= null || valor== NaN)
		valor=0;
	return valor;	
		
}

function ocultar(elemento) {
	$(elemento).addClass('hide');
}

function mostrar(elemento) {
	$(elemento).removeClass('hide');
}

function cambio() {
	var opc= obtener_valor('#servicio_id');
	var elemento="", total= obtener_valor('#ipt_TS');
	for (var i = 1; i <= total; i++) {
		elemento= "#serv_"+i;
		if(opc== i) mostrar(elemento);
		else 		ocultar(elemento); 
	}
}
function asigna_cte() {
	return obtener_valor('#iptcliente');	

}	

function enviar() {
	var cliente=asigna_cte();
	$('#cliente_id').val(cliente);
	console.log('cliente');
	//falta agregar el formato decimal cuando sea tipo lavado

	if(cliente>0){
		$('#frm_pedido').submit();
	}
	else{
		alert('No selecciono cliente');
	}
	
}


function numeros(e){
	 tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
        
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}

function solonumeros (evt) {
	 var charCode = (evt.which) ? evt.which : evt.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode != 46) return false;
return true;
}

function solonumerosMoneda (evt) {
	 var nav4 = window.Event ? true : false;
	var key = nav4 ? evt.which : evt.keyCode;
	return (key <= 13 || key==46 || (key >= 38 && key <= 57)); 

}


function formatoDecimal(amt)
{
    return amt.match(/^\d*(.\d{0,2})?$/);
}

function costo(tipo) {
	servicio=0;
	volumen=0;
	precio=0;
	minimo=0;
	switch(tipo)
	{	
		
		case 1:
			servicio = obtener_valor('#iptCosto');
			volumen = obtener_valor('#kilos');
			minimo = obtener_valor('#iptMin');
			precio = (volumen>=minimo)? servicio * volumen : servicio * minimo;
			console.log('Costo '+ precio.toFixed(2));

		break;

		case 2:

			servicio = obtener_valor('#iptCosto');
			piezas = obtener_valor('#piezas');
			minimo = obtener_valor('#iptMin');
			
			console.log('piezas' + piezas);
			console.log('minimo' + minimo);
			

			precio = (piezas>=minimo)? (servicio / minimo) * piezas : servicio;
			console.log('Costo '+ precio);
		break;
	}
		

	$('#lbl_Costo').text('$'+precio);
	

}

function estableceFechas(){
	$("#fecha_recoleccion").val(
        $("#iptFR").datepicker('mm/dd/yyyy'));

        	$("#fecha_entrega").val(
        	$("#iptFE").datepicker('mm/dd/yyyy'));
}

function cambiaStatus(ticket,status){

//
}

function mostrarDiv(div){
	$(div).removeClass('hide');
}


function costoReco(tipo,pos) {
	
	console.log('Pos' +pos);
	servicio=0;
	volumen=0;
	precio=0;
	minimo=0;
	lavado=0;
	planchado=0;

	total=0;
	
	servicio_completo= $('#iptSC'+pos).prop("checked") ? 180 : 0;
	switch(tipo)
	{	
		
		case 1:
			servicio = 35;
			volumen = obtener_valor('#kilos'+pos);
			minimo = 4;
			if(volumen>0){
				precio = (volumen>=minimo)? servicio * volumen : servicio * minimo;
				$('#iptPK'+pos).val(precio);
				console.log('Costo '+ precio.toFixed(2) + ' Kilo ' + volumen + "piezas "+ total);
			}
			else{
				precio=0;
				$('#iptPK'+pos).val(0);

			}

				total=  parseInt(obtener_valor('#iptPP'+pos)) + precio + servicio_completo;
				lavado=1;
			

			
		break;

		case 2:

			servicio = 135;
			piezas = obtener_valor('#piezas'+pos);
			minimo = 12;
			adicional=10;
			if(piezas>0){

				precio = (piezas>=minimo)?  servicio + ((piezas - minimo) * adicional ) : servicio;
				$('#iptPP'+pos).val(precio);
				
			}
			else
			{
				$('#iptPP'+pos).val(0);
			}
				total= parseInt(obtener_valor('#iptPK'+pos)) + precio + servicio_completo;
				console.log('Costo '+ precio + ' Piezas ' + piezas + "kilos "+ total);
				planchado=1;
		break;

		case 3:
				total=servicio_completo;
				volumen = obtener_valor('#kilos'+pos);
				if(volumen>0) costoReco(2,pos);
				piezas = obtener_valor('#piezas'+pos);
				if(piezas>0) costoReco(3,pos);

		break;
		

	}
		
	if (total>0){
		$('#lbl_Costo'+pos).text('Costo $'+total.toFixed(2)).removeClass('hide'); 
		$('#iptTotal'+pos).val(total);
		}
	
	else { 
		$('#lbl_Costo'+pos).text('Costo $0').removeClass('hide'); 
		$('#iptTotal'+pos).val(0);
		
	}
	//Mostrando el servicio solitado
	//	Paquete Completo (Lavado y Planchado 1 docena)
	
	tipo_servicio="";
	/*if (lavado==1)
	{
		if( planchado==1)
		{
			if(servicio_completo!=0)
			{
				tipo_servicio="Paquete Completo (Lavado y Planchado 1 docena) + Adicional de Lavado y Planchado";
			}
			else
			{
				tipo_servicio="Lavado y Planchado";
			}
		}	
		else
		{
			tipo_servicio="Lavado";
		}
	}		
	else{
		if( planchado==1)
		{
			tipo_servicio="Planchado";
		}
	}
	$('#lblTipoS'+pos).text(tipo_servicio);
	*/
}

function servicioCompleto (pos) {
	servicio= $('#iptSC'+pos).prop("checked") ? true : false;
	console.log('valor '+ servicio);
	if(servicio){
		$('#lbl_Costo'+pos).text('Costo $180.00').removeClass('hide');
		$('#iptServCom'+pos).val(180);
		$('#lblTipoS'+pos).text('Paquete Completo (Lavado y Planchado 1 docena)');
		$('#iptTotal'+pos).val(180);
		}
	else{
		$('#iptServCom'+pos).val(0);
	}	
	

	
}

function adicional (pos) {
	costoReco(3,pos);
	console.log('se llamo a adicional' + pos);	
}

function guarda(pos){

	//mostrar el precio
	console.log('pos '+ pos);
	costoReco(3,pos);

	//$('#frm_'+pos).submit();
	//peticiong('#frm_'+pos,1);


	costo=obtener_valor('#iptTotal'+pos);
	if(costo>0){
		console.log('se tiene un costo ' + costo);
		peticiong('#frm_'+pos,1);
	}
	else{
		alert('No has introducido los datos de la orden');
	}
}


function cambiaStatus(pos){
	var frm="#frm_";

peticiona(6,frm+pos);
}

function peticiona(opc, datos){
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
function peticiong(datos,opc)//mantener=cache
{
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
					$(obj.div).addClass('hide');
					$(obj.modal).modal('hide');
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