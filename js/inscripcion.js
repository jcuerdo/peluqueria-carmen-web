function get(id){
	var obj = document.getElementById(id);
	return obj;
}

function borra() {
	get('formu_inscripcion').reset();
}

String.prototype.ltrim = function() { return this.replace(/^\s+/, ""); }
String.prototype.rtrim = function() { return this.replace(/\s+$/, ""); }
String.prototype.trim = function() { return this.rtrim().ltrim(); }

function enviar() {
	var campos = new Array ('nombre', 'apellidos', 'nacimiento', 'email', 'titulacion', 'curso', 'titulo', 'resumen', 'userfile');
	var nombres = new Array ('Nombre', 'Apellidos', 'Año nacimiento', 'e-mail', 'Titulación', 'Curso', 'Título Propuesta', 'Resumen Propuesta', 'Fichero Propuesta');
	for (var i=0; i<campos.length; i++) {
		if ( (get(campos[i]).value == '')||(get(campos[i]).value == ' ') ) {
			alert ('Debes rellenar todos los campos.\n"' + nombres[i] + '" no puede quedar en blanco.');
			get(campos[i]).focus();
			return false;
		}
	}
	if (!es_email(get('email').value)) {
		alert('El email no parece válido.');
		get('email').focus();
		return false;
	}
	if (!es_year(get('nacimiento').value)) {
		alert('El A�o de nacimiento no parece válido.');
		get('nacimiento').focus();
		return false;
	}
	if ( (get('year').value != '') || (get('year').value != ' ') ){
		if(!es_year(get('year').value)) {
			alert('El Año de inicio no parece válido.');
			get('year').focus();
			return false;
		}
	}
	function texto_clausula () {
		document.write('<p class="acenter"><a href="#" id="TB_closeWindowButton" onclick="cierra_clausula();">Aceptar y cerrar</a></p>');
	}
	return true;
}

function es_email(email){
	return email.match("^([a-zA-Z0-9_\\-])+(\\.([a-zA-Z0-9_\\-])+)*@((\\[(((([0-1])?([0-9])?[0-9])|(2[0-4][0-9])|(2[0-5][0-5])))\\.(((([0-1])?([0-9])?[0-9])|(2[0-4][0-9])|(2[0-5][0-5])))\\.(((([0-1])?([0-9])?[0-9])|(2[0-4][0-9])|(2[0-5][0-5])))\\.(((([0-1])?([0-9])?[0-9])|(2[0-4][0-9])|(2[0-5][0-5]))\\]))|((([a-zA-Z0-9])+(([\\-])+([a-zA-Z0-9])+)*\\.)+([a-zA-Z])+(([\\-])+([a-zA-Z0-9])+)*))$")
}
function es_year(year){
	return year.match("^([0-9])*$")
}

function inicio(){
	get('formu_inscripcion').onsubmit = enviar;
}

function texto_clausula () {
	document.write('<p class="acenter"><a href="#" id="TB_closeWindowButton" onclick="cierra_clausula();">Aceptar y cerrar</a></p>');
}

var clau = false;

function muestra_clausula() {
	
	if (!clau) {
		get('div_clausula').style.display = 'block';
		clau = true;
	}
}


function muestra_clausula1() {
	
	if (get('clausula').checked==true){
		get('enviar').style.display = 'block';
	}
	if (get('clausula').checked==false){
		get('enviar').style.display = 'none';
	}
}

function cierra_clausula() {
	get('div_clausula').style.display = 'none';
	get('enviar').style.display = 'block';
	get('clausula').checked = true;
	clau = false;
}

function mensaje_ampliar(accion) {
	if (accion==1) get('mensaje_ampliar').style.visibility = 'visible';
	else get('mensaje_ampliar').style.visibility = 'hidden';
}

window.onload =  inicio;
