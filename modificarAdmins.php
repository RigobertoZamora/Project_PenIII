<html>
<head>
	<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modificando un Administrador</title>
	<link rel="stylesheet" href="central-style.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="funciones.js"></script>
</head>
<body>


	<!------------------------------------------------------------->
	<h1><center>-Modificación de Administrador-</center></h1>
	<?php
		//Paso 1:  creo la conexion
		$conexion  = mysqli_connect("localhost", "root", "administrador", "inventarioc");
		//Paso 2: Creo la consulta 
		$querySelect = "SELECT * FROM admins WHERE id=".$_GET['id'];
		//Paso  3: Ejecuta la consulta
		$resultado = mysqli_query($conexion, $querySelect);
		//Paso 4: Extraigo los datos de la consulta
		$admin= mysqli_fetch_array($resultado);
	?>
	<div id="formulario" class="centrado form">
        <p class="centrado grande identar">Modifica los datos del Administrador</p>
      <form method="post" action="modificarAdmins2.php" name="formulario">
        
        <input class="input" type="hidden" id="id" name="id" value="<?php echo $admin['id']; ?>">

        <label>Nombre: </label>
        <input
          type="text"
          id="nombre"
          name="nombre"
          value="<?php echo $admin['nombre']; ?>"
          class="input"
          placeholder="Ingresa Tu Nuevo Nombre"
        />
        <br><br>
        <label>Correo:</label>
        <input
          type="text"
          id="correo"
          name="correo"
          value="<?php echo $admin['correo']; ?>"
          class="input"
          placeholder="Ingresa tu Nuevo Correo Electronico"
        />
        <br /><br />
        <label>Contrase&ntildea:</label>
        <input
          type="text"
          id="contra"
          name="contra"
          value="<?php echo $admin['password']; ?>"
          class="input"
          placeholder="Ingresa tu Nueva Contraseña"
        />
        <br /><br />


        <input type="button" class="send" value="Modificar Datos" onclick="modificarAdmin();">
      </form>
    </div>
    <p class="derecha grande identar"><b><i>Umizumi inc.</i></b></p>
    <a href="administradores.php" class="derecha grande identar">🡨 Regresar</a>
</body>
</html>