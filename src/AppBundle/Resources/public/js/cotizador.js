var editableGrid;
var count = 1;
var presupuestoId = 0;

window.onload = function() {	
	editableGrid = new EditableGrid("DemoGridJSON"); 
	editableGrid.tableLoaded = function() { 

					// renderer for the action column
		this.setCellRenderer("borrar", new CellRenderer({render: function(cell, value) { 
			cell.innerHTML = "<a onclick=\"if (confirm('¿ Esta seguro que desea descartarlo ? ')) editableGrid.remove(" + cell.rowIndex + ");\" style=\"cursor:pointer\">" +
							 "<i class=\"glyphicon glyphicon-trash\"></i></a>";

		}})); 

		this.setCellRenderer("cantidad", new CellRenderer({render: function(cell, value) { 
			
			if (isNaN(value) || value == "" || value == null) {
				value = 0;
			}
			
			cell.innerHTML = value + "<i class=\"glyphicon glyphicon-pencil\"></i>";
				
							 
		}})); 
		

		this.setCellRenderer("cantidadA", new CellRenderer({render: function(cell, value) { 
			var uma = this.editablegrid.data[cell.rowIndex].columns[7] ;

			if (uma == "") 
			{
				value = 0;
				cell.innerHTML = "";
			}
			else {
				if (isNaN(value) || value == "" ) {
					value = 0;
				}
				
				cell.innerHTML = value  + "<i class=\"glyphicon glyphicon-pencil\"></i>";
			}
		}}));


		this.modelChanged()
		this.renderGrid("tablecontent", "testgrid"); 

	};
	var urlDatos = $("#tablecontent").data("url");
	editableGrid.loadJSON(urlDatos);
	actualizarCategorias(false);
	actualizarObras();
} 


function add() {
	var url = Routing.generate("unidad");
	var um = "desc";
	var obra = $("#obra option:selected").text();
	var categoria = $("#categoria option:selected").text();
	var values = { obra : obra };

	$.ajax({
		url: url,
		type: 'get',
		dataType: 'json',
		async: false,
		cache: false,
		data: {obra: obra, categoria: categoria}
	}).done (function(data){
		values = data;
	});


	editableGrid.addRow(count, values , {}, false);
	count++;
}

function confirmar() {

	$('.itemsContext').hide(1000);
	$('.generadorPDF').show(1000);

}

function volverItems() {
	$('.generadorPDF').hide(1000);
	$('.itemsContext').show(1000);
}


function volverPrespuesto() {
	$('.itemsContext').hide(1000);
	$('.page-header').show(1000);	
}



function generarPDF() {

	var urlCaptcha = Routing.generate('validarCaptcha', {captcha: $('#captcha')[0].value}, false);

	$.ajax({
		url: urlCaptcha,
		type: 'get',
		dataType: 'json',
		async: false,
		cache: false
	}).done (function(data){
		
		if (data.result) {
			
			array = generarPresupuesto();

			//habilito boleta
			habilitarBoleta();

			datos = JSON.stringify(array["datos"]);
			total = array["total"];
			//ajax
			var url = $("#generarPDF").data("url");
			datosGenerales = datosGeneralesDelPresupuesto(true);

			var url = url + "?datos=" + datos + "&datosGenerales=" + datosGenerales + "&presupuestoId=" + presupuestoId + "&total=" + total;
			window.location.href = url;
		}
		else {
			$('#mensajeCaptcha')[0].innerHTML = "Completar captcha correctamente";
		}
	});

	
}


function autoComplete( parameters ){
	var element = $( parameters.input );
	var url		= parameters.url;

	$.ajax({
		url: url,
		type: 'get',
		dataType: 'json',
		async: false,
		cache: false
	}).done (function(data){
		result = data;
	});


	element.typeahead({
		source: result,
		limit: 10,
		name: name,
		afterSelect: function(data){
			//console.log(data);
			// element.attr('data-parent',data.id);
		}
	});

	return element;
}

function actualizarObras() {
	var newSource;

	var categoria = $("#categoria option:selected").text();;

	var url = Routing.generate('getObrasJSON', {categoria: categoria}, false);
	var obras = $('#obra');
	$.ajax({
		url: url,
		type: 'get',
		dataType: 'json',
		async: false,
		cache: false,
	}).done (function(data){
		result = data;
		//obras.data('typeahead').source = result;

		obras.find('option').remove();

        $(result).each(function(i, v){ // indice, valor
            obras.append('<option value="' + v.id + '">' + v.name + '</option>');
        })
	});
}


$('#tipo').on('change',function() {
	actualizarCategorias(true);	
});
function actualizarCategorias(remover) {
	var newSource;
	$('#categoria').val('');
	$('#obra').val('');
	var categorias = $('#categoria');

	var tipo = $('#tipo')[0].value;

	var url = Routing.generate('getCategoriasJSON', {tipo: tipo}, false);

	$.ajax({
		url: url,
		type: 'get',
		dataType: 'json',
		async: false,
		cache: false,
	}).done (function(data){
		result = data;
		//categorias.data('typeahead').source = result;
		categorias.find('option').remove();

        $(result).each(function(i, v){ // indice, valor
            categorias.append('<option value="' + v.id + '">' + v.name + '</option>');
        })
	});	

	if (remover) removeAll();

}


function removeAll() {
	for (var i = 0; i <= count; i++) {
		editableGrid.remove(0);
	
	};
	count = 0;
}	


function datosGeneralesDelPresupuesto(catpcha ) {


	datosGenerales = {  //director
						nombreDirector:  $('#nombreDirector')[0].value, 
						cuitDirector:  $('#cuitDirector')[0].value, 
						matricula:  $('#matricula')[0].value, 
						telefono: $('#telefono')[0].value, 
						mail: $('#mail')[0].value, 
						consejo: $('#consejo')[0].value, 
						cpDirector: $('#cpDirector')[0].value, 
						domicilioDirector: $('#domicilioDirector')[0].value, 
						localidad:  $('#localidad')[0].value, 
						//propietario
						nombrePropietario:  $('#nombrePropietario')[0].value, 
						cuitPropietario:  $('#cuitPropietario')[0].value, 
						domicilioPropietario:  $('#domicilioPropietario')[0].value, 
						//obra
						ubicacion:  $('#ubicacion')[0].value, 
						seccion:  $('#seccion')[0].value, 
						manzana:  $('#manzana')[0].value, 
						parcela:  $('#parcela')[0].value, 
						tipo: $('#tipo')[0].value,

					 };

	if (catpcha) {
		datosGenerales["captcha"] = $('#captcha')[0].value;
	}
	datosGenerales = JSON.stringify(datosGenerales);
	

	return datosGenerales;
}
function confirmarDatosDelPresupuesto() {
	
	var datosGenerales = datosGeneralesDelPresupuesto(false);

	var url = Routing.generate('validarDatosGenerales', {datosGenerales: datosGenerales}, false);
	
	$.ajax({
		url: url,
		type: 'get',
		dataType: 'json',
		async: false,
		cache: false,
	}).done (function(data){

		if (data.result) {
			$('.alert').hide();
			$('.page-header').hide(1000);
			$('.itemsContext').show(1000);	
		}
		else {
			var urlRedirect = Routing.generate('inicio', {datosGenerales: datosGenerales}, false);
			window.location.href = urlRedirect;		
		}
		
	});
}


$('#categoria').on('change',function() {
	actualizarObras();

});

$('.secure-code-refresh').on('click', function(){
	var url = Routing.generate('secure_code', {}, false);
	var urlReal = url + '?' + (Math.floor(Math.random() * (1000 - 1)) + 1);
	$('.secure-code-src').attr('src', urlReal);
	
	
});


function habilitarBoleta() {
	document.getElementById("btnBoleta").disabled = false;
}

function generarPresupuesto() {
	datosGenerales = datosGeneralesDelPresupuesto(true);
	datos = JSON.stringify(editableGrid.data);

	var urlPresupuesto = Routing.generate('cotizar', {}, false);
	var total;
	var datos;
	$.ajax({
		url: urlPresupuesto,
		type: 'post',
		dataType: 'json',
		async: false,
		cache: false,
		data: {datosGenerales: datosGenerales,  datos: datos}
	}).success (function(data){
		presupuestoId = data.presupuestoId;

		total = data.total;
		datos = data.datos;
		
	});	

	return {total: total, datos: datos};
}


function generarBoleta() {
	var url = Routing.generate('generarBoleta', {presupuestoId: presupuestoId}, false);
	window.location.href = url;

}