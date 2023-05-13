<html>
<head>
	<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modificando registro...</title>
	<link rel="stylesheet" href="style.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="funciones.js"></script>
</head>
<body>
	<!--Lista-->
	<ul> 
    <li><a href="formulario.php">CERRAR SESION</a></li>
    <li><a href="mostrar_datos1.php">REGISTROS ACTUALES</a></li>
    <li><a href="historial.php">HISTORIAL</a></li>
    <li><a href="inventario.php">INVENTARIO</a></li>
    <li><a href="administradores.php">ADMINISTRADORES</a></li>
  </ul>
	<!------------------------------------------------------------->
	<h1><center>-Modificación de datos-</center></h1>
	<?php
		//Paso 1:  creo la conexion
		$conexion  = mysqli_connect("localhost", "root", "administrador", "inventarioc");
		//Paso 2: Creo la consulta 
		$querySelect = "SELECT * FROM inventario WHERE id=".$_GET['id'];
		//Paso  3: Ejecuta la consulta
		$resultado = mysqli_query($conexion, $querySelect);
		//Paso 4: Extraigo los datos de la consulta
		$inventario= mysqli_fetch_array($resultado);
	?>
	<div id="formulario" class="centrado form">
        <p class="centrado grande identar">Modifica los datos del equipo</p>
      <form method="post" action="modificar2Inv.php" name="formularioNI" >

        <input
          type="hidden"
          id="id"
          name="id"
          value="<?php echo $inventario['id']; ?>"
          class="input"
        />

        <input type="text" id="ninventario" name="ninventario" class="input" value="<?php echo $inventario['n_inventario']; ?>" placeholder="Ingresa el numero de inventario"/>
        <br/><br/>
        <select id="equipo" class="input" name="equipo">
          <option <?php echo $inventario['equipo']; ?>><?php echo $inventario['equipo']; ?></option>
          <option value="LAPTOP">Laptop</option>
          <option value="CABLE VGA">Cable VGA</option>
          <option value="BOCINAS">Bocinas</option>
          <option value="ADAPTADOR">Adaptador</option>
          <option value="EXTENSION">Extension</option>
        </select>
        <br/><br/>
        <input type="text" id="descripcion" name="descripcion" class="input" value="<?php echo $inventario['descripcion']; ?>" placeholder="Ingresa descripcion"/>
        <br/><br/>
        <input type="text" id="nfolio" name="nfolio" class="input" value="<?php echo $inventario['n_folio']; ?>" placeholder="Ingresa el numero de folio"/>
        <br/><br/>
        <input type="text" id="importe" name="importe" class="input" value="<?php echo $inventario['importe']; ?>"placeholder="Ingresa el importe"/>
        <br/><br/>
        <input type="text" id="marca" name="marca" class="input" value="<?php echo $inventario['marca']; ?>" placeholder="Ingresa la marca"/>
        <br/><br/>
        <input type="text" id="modelo" name="modelo" class="input" value="<?php echo $inventario['modelo']; ?>" placeholder="Ingresa el modelo"/>
        <br/><br/>
        <input type="text" id="serie" name="serie" class="input" value="<?php echo $inventario['serie']; ?>" placeholder="Ingresa la serie"/>
        <br/><br/>
        <input type="text" id="ubicacion" name="ubicacion" class="input" value="<?php echo $inventario['ubicacion']; ?>" placeholder="Ingresa la ubicacion"/>
        <br/><br/>
        <input type="date" id="fechar" name="fechar" class="input" value="<?php echo $inventario['fecha_resguardo']; ?>" placeholder="Inicia por año completo, mes y día"/>
        <br/><br/>
        <input type="text" id="bnl" name="bnl" class="input" value="<?php echo $inventario['bnl']; ?>" placeholder="¿Venia en el envio?"/>
        <br><br>
        <input type="submit" class="send" value="Modificar Inventario" onclick="NoFuncionaPQ()"/>
      </form></div>
    <p class="derecha grande identar"><b><i>Umizumi inc.</i></b></p>
</body>
</html>