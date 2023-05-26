<html>
<head>
	<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modificando registro...</title>
	<link rel="stylesheet" href="central-style.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="funciones.js"></script>
</head>
<body>
	<!--------------------------Lista---------------------------->
	<div id="CreditsBtn">
      <ul>
        <li>
          <a href="mostrar_datos1.php"> <span></span> 🡨 Regresar</a>
        </li>
      </ul>
    </div>
	<!------------------------------------------------------------->
	<h1><center>-Modificación de datos-</center></h1>
	<?php
		//Paso 1:  creo la conexion
		$conexion  = mysqli_connect("localhost", "root", "administrador", "inventarioc");
		//Paso 2: Creo la consulta 
		$querySelect = "SELECT * FROM registros WHERE id=".$_GET['id'];
		//Paso  3: Ejecuta la consulta
		$resultado = mysqli_query($conexion, $querySelect);
		//Paso 4: Extraigo los datos de la consulta
		$inventario= mysqli_fetch_array($resultado);
	?>
	<div id="formulario" class="centrado form">
        <p class="centrado grande identar">Modifica los datos del préstamo</p>
      <form method="post" action="modificar2.php" name="formulario">
        <input
          type="hidden"
          id="id"
          name="id"
          value="<?php echo $inventario['id']; ?>"
          class="input"
          placeholder="Ingresa el numero de cuenta"
        />
        <input
          type="text"
          id="ncuenta"
          name="ncuenta"
          value="<?php echo $inventario['No_cuenta']; ?>"
          class="input"
          placeholder="Ingresa el numero de cuenta"
        />
        <br /><br />
        <input
          type="text"
          id="ncompleto"
          name="ncompleto"
          value="<?php echo $inventario['Nombre']; ?>"
          class="input"
          placeholder="Ingresa el nombre completo"
        />
        <br /><br />
        <input
          type="text"
          id="grapo"
          name="grapo"
          value="<?php echo $inventario['grapo']; ?>"
          class="input"
          placeholder="Ingresa el grado y grupo"
        />
        <br /><br />
        <?php
          date_default_timezone_set('America/Chihuahua');
          $fecha = date("Y-m-d");
          $hora = date("H:i:s");
        ?>
        <input
          type="text"
          id="fecha"
          name="fecha"
          class="input"
          value="<?php echo $fecha; ?>"
          readonly
        />
        <br /><br />
        <input
          type="text"
          id="hora"
          name="hora"
          class="input"
          value="<?php echo $hora; ?>"
          readonly
        />
        <br />
        <!--<select id="equipo" class="input" name="equipo">
          <option selected disabled>Selecciona equipo</option>
          <option value="laptop">Laptop</option>
          <option value="cable vga">Cable VGA</option>
          <option value="bocinas">Bocinas</option>
          <option value="adaptador">Adaptador</option>
          <option value="etension">Extension</option>
        </select>
         -->
        <h1 class="centrado grande identar">Confirma la selección de equipo(s)</h1>
        <input type="checkbox" name="equipo" id="equipo" value=" Laptop">
        <label for="equipo">Laptop</label>
        <input type="checkbox" name="equipo1" id="equipo" value=" Cable VGA">
        <label for="equipo1">Cable VGA </label>
        <input type="checkbox" name="equipo2" id="equipo" value=" Bocinas">
        <label for="equipo2">Bocinas </label>
        <input type="checkbox" name="equipo3" id="equipo" value=" Adaptador">
        <label for="equipo3">Adaptador </label><br>
        <input type="checkbox" name="equipo4" id="equipo" value=" Extensión">
        <label for="equipo4">Extensión</label>
        <br /><br />

        <input type="button" class="send" value="Modificar Datos" onclick="validar();" />
      </form>
    </div>
    <p class="derecha grande identar"><b><i>Umizumi inc.</i></b></p>
</body>
</html>