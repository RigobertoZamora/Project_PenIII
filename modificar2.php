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
	<?php
    $equipo= "| Laptop | ";
    $equipo1="| Cable VGA | ";
    $equipo2="| Bocinas | ";
    $equipo3="| Adaptador | ";
    $equipo4="| Extensión |";
    
    $equipos = "";
    if($_POST['equipo'] == true)
    {
      $equipos .=$equipo;
    }
    if ($_POST['equipo1'] == true) 
    {
      $equipos .=$equipo1;
    }
    if ($_POST['equipo2'] == true) 
    {
      $equipos .=$equipo2;
    }
    if ($_POST['equipo3'] == true) 
    {
      $equipos .=$equipo3;
    }
    if ($_POST['equipo4'] == true) 
    {
      $equipos .=$equipo4;
    }      
  ?>
  <br><h1><center>Actualizando datos a la base de datos</center></h1>
  <?php
    //Paso 1: Me conecto al servidor y guardo la conexion
    $conexion = mysqli_connect("localhost", "root", "administrador", "inventarioc");

    //Paso 2: Creo la consulta SQL para actualizar
    $consultaUpdate = "UPDATE registros SET
                       No_cuenta=".$_POST['ncuenta'].", 
                       Nombre='".$_POST['ncompleto']."',
                       grapo='".$_POST['grapo']."',
                       fecha='".$_POST['fecha']."',
                       hora='".$_POST['hora']."',
                       equipo='".$equipos."'
                       WHERE 
                       id=".$_POST['id'];
    //Paso 3: Ejecuto la consulta SQL para actualizar
    mysqli_query($conexion, $consultaUpdate);
    
    //Paso 4: Ejecuto la consulta SQL y guardo el resultado
    $querySelect = "SELECT * FROM registros"; 
    $resultado = mysqli_query($conexion, $querySelect);
  ?>
  <h3>Los Prestamistas registrados son:</h3><br>

  <table>
    <tr>
       <th>ID</th>
       <th>No.Cuenta</th>
       <th>Nombre Completo</th>
       <th>Grado y Grupo</th>
       <th>Fecha</th>
       <th>Hora</th>
       <th>Equipo(s)</th>
       <th>Acciones</th>
    </tr>
    <?php
      while($inventario = mysqli_fetch_array($resultado))
      {
          echo"
               <tr>
                    <td>".$inventario['id']."</td>
                    <td>".$inventario['No_cuenta']."</td>
                    <td>".$inventario['Nombre']."</td>
                    <td>".$inventario['grapo']."</td>
                    <td>".$inventario['fecha']."</td>
                    <td>".$inventario['hora']."</td>
                    <td>".$inventario['equipo']."</td>
                    <td>
                          <a href='eliminar.php?id=".$inventario['id']."'>Eliminar</a >
                          <a href='modificar.php?id=".$inventario['id']."'>Modificar</a >
                          </td>
               </tr>
          ";
      }
?>
</table>
        <form method="post" class="salto1" action="formularioNA.php">
            <input type="submit" class="btnInit" value="Añadir nuevo administrador" />
        </form>
</body>
</html>