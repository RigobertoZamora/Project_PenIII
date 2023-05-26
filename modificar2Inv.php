<html>
<head>
	<title>Registro modificado</title>
	<link rel="stylesheet" href="central-style.css">
</head>
<body>
	<!--Lista-->
<nav role="navigation">
        <div id="menuToggle">
            <input type="checkbox"/>
            <span></span>
            <span></span>
            <span></span>
            <ul id="menu">
              <li><a href="formulario.php">CERRAR SESION</a></li>
              <li><a href="mostrar_datos1.php">REGISTROS ACTUALES</a></li>
              <li><a href="historial.php">HISTORIAL</a></li>
              <li><a href="inventario.php">INVENTARIO</a></li>
              <li><a href="administradores.php">ADMINISTRADORES</a></li>
            </ul>
        </div>
</nav>
	<!--------------------------------------------------------------->
  <br><h1><center>Actualizando datos a la base de datos</center></h1>
  <?php
    //Paso 1: Me conecto al servidor y guardo la conexion
    $conexion = mysqli_connect("localhost", "root", "administrador", "inventarioc");

    //Paso 2: Creo la consulta SQL para actualizar
    $consultaUpdate = "UPDATE inventario SET
                       n_inventario=".$_POST['ninventario'].", 
                       equipo='".$_POST['equipo']."',
                       descripcion='".$_POST['descripcion']."',
                       n_folio=".$_POST['nfolio'].",
                       importe='".$_POST['importe']."',
                       marca='".$_POST['marca']."',
                       modelo='".$_POST['modelo']."',
                       serie='".$_POST['serie']."',
                       ubicacion='".$_POST['ubicacion']."',
                       fecha_resguardo='".$_POST['fechar']."',
                       bnl='".$_POST['bnl']."'
                       WHERE 
                       id=".$_POST['id'];
    //Paso 3: Ejecuto la consulta SQL para actualizar
    mysqli_query($conexion, $consultaUpdate);
    
    //Paso 4: Ejecuto la consulta SQL y guardo el resultado
    $querySelect = "SELECT * FROM inventario"; 
    $resultado = mysqli_query($conexion, $querySelect);
  ?>
  <h3>Los Prestamistas registrados son:</h3><br>

  <table id="container">
    <tr>
        <th>ID</th>
        <th>No. Inventario</th>
        <th>Equipo</th>
        <th>Descripción</th>
        <th>No. Folio</th>
        <th>Importe</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Serie</th>
        <th>Ubicación</th>
        <th>Fecha de Resguardo</th>
        <th>BNL</th>
        <th>Acciones</th>
    </tr>
    <?php
      while($inventario = mysqli_fetch_array($resultado))
      {
          echo"
               <tr>
                  <td>".$inventario['id']."</td>
                  <td>".$inventario['n_inventario']."</td>
                  <td>".$inventario['equipo']."</td>
                  <td>".$inventario['descripcion']."</td>
                  <td>".$inventario['n_folio']."</td>
                  <td>".$inventario['importe']."</td>
                  <td>".$inventario['marca']."</td>
                  <td>".$inventario['modelo']."</td>
                  <td>".$inventario['serie']."</td>
                  <td>".$inventario['ubicacion']."</td>
                  <td>".$inventario['fecha_resguardo']."</td>
                  <td>".$inventario['bnl']."</td>
                  <td>
                        <a href='eliminarInv.php?id=".$inventario['id']."'>Eliminar</a >
                        <a href='modificarInv.php?id=".$inventario['id']."'>Modificar</a >
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