<html>
<head>
	<title>Registro modificado</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<!--Lista-->
<nav class="menu">
<div class="contenedor">
<ul>
  <li><a href="formulario.php">CERRAR SESION</a></li>
  <li><a href="mostrar_datos1.php">REGISTROS ACTUALES</a></li>
  <li><a href="historial.php">HISTORIAL</a></li>
  <li><a href="inventario.php">INVENTARIO</a></li>
  <li><a href="administradores.php">ADMINISTRADORES</a></li>
</ul>
</div>
</nav>
	<!--------------------------------------------------------------->
  <h1><center>Actualizando datos a la base de datos</center></h1>
  <?php
    //Paso 1: Me conecto al servidor y guardo la conexion
    $conexion = mysqli_connect("localhost", "root", "administrador", "inventarioc");

    //Paso 2: Creo la consulta SQL para actualizar
    $consultaUpdate = "UPDATE admins SET
                       nombre='".$_POST['nombre']."', 
                       correo='".$_POST['correo']."',
                       password='".$_POST['contra']."'
                       WHERE 
                       id=".$_POST['id'];
    //Paso 3: Ejecuto la consulta SQL para actualizar
    mysqli_query($conexion, $consultaUpdate);
    
    //Paso 4: Ejecuto la consulta SQL y guardo el resultado
    $querySelect = "SELECT * FROM admins"; 
    $resultado = mysqli_query($conexion, $querySelect);
  ?>
  <h3>Los Prestamistas registrados son:</h3><br>

  <table>
    <tr>
        <th>ID</th>
        <th>Nombre Completo</th>
        <th>Correo</th>
        <th>Password</th>
        <th>Acciones</th>
    </tr>
    <?php
      while($admins = mysqli_fetch_array($resultado))
      {
          echo"
               <tr>
                    <td>".$admins['id']."</td>
                    <td>".$admins['nombre']."</td>
                    <td>".$admins['correo']."</td>
                    <td>".$admins['password']."</td>

                  <td>
                        <a href='eliminarAdmins.php?id=".$admins['id']."'>Eliminar</a >
                        <a href='modificarAdmins.php?id=".$admins['id']."'>Modificar</a >
                            </td>
               </tr>
          ";
      }
?>
</table>
        <form method="post" class="salto1" action="formularioNA.php">
            <input type="submit" class="btnInit" value="Añadir nuevo administrador" />
        </form>
        <form method="post" class="salto1" action="formularioNI.php">
            <input type="submit" class="btnInit" value="Añadir nuevo inventario" />
        </form>
</body>
</html>