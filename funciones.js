//Función para validar el préstamo
function validar()
{
	var bandera = 1;
	var ncuenta = document.getElementById('ncuenta').value;
	var ncompleto = document.getElementById('ncompleto').value;
	var grapo = document.getElementById('grapo').value;
	var fecha = document.getElementById('fecha').value;
	var hora = document.getElementById('hora').value;
	//var equipo = document.getElementById('equipo').value;


	if(ncuenta.length == 0)
	{
		Swal.fire({
		icon: 'error',
		title: 'Alerta',
		text: 'No puedes dejar la cuenta en blanco!',
		showConfirmButton: false,
		timer: 3000
		})
		bandera = 2;
	}

	if(ncompleto.length == 0)
	{
		Swal.fire({
		icon: 'error',
		title: 'Alerta',
		text: 'No puedes dejar el nombre en blanco!',
		showConfirmButton: false,
		timer: 3000
		})
		bandera = 2;
	}

	if(grapo.length == 0)
	{
		Swal.fire({
		icon: 'error',
		title: 'Alerta',
		text: 'No puedes dejar el grado y grupo en blanco!',
		showConfirmButton: false,
		timer: 3000
		})
		bandera = 2;
	}


	if(fecha.length == 0)
	{
		Swal.fire({
		icon: 'error',
		title: 'Alerta',
		text: 'No puedes dejar la fecha en blanco!',
		showConfirmButton: false,
		timer: 3000
		})
		bandera = 2;
	}

	if(hora.length == 0)
	{
		Swal.fire({
		icon: 'error',
		title: 'Alerta',
		text: 'No puedes dejar la hora en blanco!',
		showConfirmButton: false,
		timer: 3000
		})
		bandera = 2;
	}

	/*if(equipo == "Selecciona equipo")
	{
		Swal.fire({
		icon: 'error',
		title: 'Alerta',
		text: 'Debes seleccionar un equipo!',
		showConfirmButton: false,
		timer: 3000
		})
		bandera = 2;
	}*/

	//Hago validacion para saber si mi formulario esta bien llenado
	if(bandera == 1)
	{
		Swal.fire({
		  title: '¿Deseas continuar?',
		  text: "Verifica que tus datos sean correctos, una vez hecho el registro no podrás modificarlos",
		  icon: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  cancelButtonText: 'Cancelar',
		  confirmButtonText: 'Si'
		}).then((result) => {
		  if (result.isConfirmed) {
		    document.formulario.submit();
		  }
		})
	}
}

//Función para validar el login
function validarUsuario()
{
	var correo = document.getElementById('correo').value;
	var password = document.getElementById('password').value;
	if(correo == "")
	{
		Swal.fire({
			icon: 'error',
			title: 'Alerta',
			text: 'Usuario o password no validos!',
			showConfirmButton: false,
			timer: 3000
			})
			bandera = 2;
		}else
		{
			bandera = 1;
		}


	if(password == "")
	{
		Swal.fire({
			icon: 'error',
			title: 'Alerta',
			text: 'Usuario o password no validos!',
			showConfirmButton: false,
			timer: 3000
			})
			bandera = 2;
		}else
		{
			bandera = 1;
		}

	if(bandera == 1)
	{
		document.formulario.submit();
	}	
}

//Función para validar nuevo administrador
function validarNA()
{
	var ncompletona = document.getElementById('ncompletona').value;
	var correona = document.getElementById('correona').value;
	var passwordna = document.getElementById('passwordna').value;

	if(ncompletona.length == 0)
	{
		Swal.fire({
		icon: 'error',
		title: 'Alerta',
		text: 'No puedes dejar el nombre en blanco!',
		showConfirmButton: false,
		timer: 3000
		})
		bandera = 2;
		}

	if(correona == "")
	{
		Swal.fire({
		icon: 'error',
		title: 'Alerta',
		text: 'Usuario o password no validos!',
		showConfirmButton: false,
		timer: 3000
		})
		bandera = 2;
		}else
		{
			bandera = 1;
		}


	if(passwordna == "")
	{
		Swal.fire({
		icon: 'error',
		title: 'Alerta',
		text: 'Usuario o password no validos!',
		showConfirmButton: false,
		timer: 3000
		})
		bandera = 2;
		}else
		{
			bandera = 1;
		}

	if(bandera == 1)
	{
		document.formularioNA.submit();
	}	
}

//Función para validar el insertado de equipos
function validarEquipo()
{
	var equipo = document.getElementById('equipo').value;
	var bandera = 1;

	if(equipo == "Selecciona equipo")
	{
		Swal.fire({
		icon: 'error',
		title: 'Alerta',
		text: 'Debes seleccionar un equipo!',
		showConfirmButton: false,
		timer: 3000
		})
		bandera = 2;
	}

	if(bandera == 1)
	{
		document.formularioEquipos.submit();
	}
}

//Función para validar nuevo inventario
function NoFuncionaPQ()
{
	var bandera = 1;
	var ninventario = document.getElementById('ninventario').value;
	var equipo = document.getElementById('equipo').value;
	var descripcion = document.getElementById('descripcion').value;
	var nfolio = document.getElementById('nfolio').value;
	var importe = document.getElementById('importe').value;
	var marca = document.getElementById('marca').value;
	var modelo = document.getElementById('modelo').value;
	var serie = document.getElementById('serie').value;
	var ubicacion = document.getElementById('ubicacion').value;
	var fechar = document.getElementById('fechar').value;
	var bnl = document.getElementById('bnl').value;
	
	
	if(ninventario == "")
	{
		Swal.fire({
			icon: 'error',
			title: 'Alerta',
			text: 'No puedes dejar el No. inventario en blanco!',
			showConfirmButton: false,
			timer: 3000
		})
		bandera = 2;
	}
	
	

	//Hago validacion para saber si mi formulario de nuevo inventario esta bien llenado
	if(bandera == 1)
	{
		Swal.fire({
			title: '¿Deseas continuar?',
			text: "Verifica que tus datos sean correctos, una vez hecho el registro no podrás modificarlos",
			icon: 'warning',
			showConfirmButton: true,
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			cancelButtonText: 'Cancelar',
			confirmButtonText: 'Si'
		}).then((result) =>{
			if(result.isConfirmed)
			{
				document.formularioNI.submit();
			}
		})
	}
}

//Funciones individuales para hacer aparecer los select que tienen un checkbox
function mostrarSelect() {
	var select = document.getElementById("opciones");
	if (document.getElementById("equipo").checked) {
	  select.style.display = "block";
	} else {
	  select.style.display = "none";
	}
  }

function mostrarSelect1() {
	var select = document.getElementById("opciones1");
	if (document.getElementById("equipo1").checked) {
	  select.style.display = "block";
	} else {
	  select.style.display = "none";
	}
  }

function mostrarSelect2() {
	var select = document.getElementById("opciones2");
	if (document.getElementById("equipo2").checked) {
	  select.style.display = "block";
	} else {
	  select.style.display = "none";
	}
  }
  
function mostrarSelect3() {
	var select = document.getElementById("opciones3");
	if (document.getElementById("equipo3").checked) {
	  select.style.display = "block";
	} else {
	  select.style.display = "none";
	}
  }

function mostrarSelect4() {
	var select = document.getElementById("opciones4");
	if (document.getElementById("equipo4").checked) {
	  select.style.display = "block";
	} else {
	  select.style.display = "none";
	}
  }

//Funcion para validar el usuario que está activo
function UsuarioActivo()
{
	var usuario = document.getElementById("usuario").value;

	alert(usuario);
}

function modificarAdmin()
{
	document.formulario.submit();
}