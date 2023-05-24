<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro del préstamo</title>
    <!--<link rel="stylesheet" href="style.css" />-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="funciones.js"></script>
</head>
<body>
<nav class="menu">
  <div class="contenedor">
  <ul>
    <li><a href="loginn.html">ADMINISTRADOR</a></li>
    <li><a href="acerca.html">ACERCA DE...</a></li>
  </ul>
  </div>
</nav>
    <div id="formulario" class="centrado form">
        <p class="centrado grande identar">Ingresa los datos del prestamista</p>
      <form method="post" action="ingresa.php" name="formulario">
        <input
          type="text"
          id="ncuenta"
          name="ncuenta"
          class="input"
          placeholder="Ingresa el numero de cuenta"
        />
        <br /><br />
        <input
          type="text"
          id="ncompleto"
          name="ncompleto"
          class="input"
          placeholder="Ingresa el nombre completo"
        />
        <br /><br />
        <input
          type="text"
          id="grapo"
          name="grapo"
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

         <!--Poner las etiquetas select abajo de la del label cuando el problema con Javascript se soluciones-->
        <h1 class="centrado grande identar">Selecciona equipo(s)</h1>
        <input type="checkbox" name="equipo" id="equipo" value=" Laptop" onchange="mostrarSelect()">
        <label for="equipo">Laptop</label>
        <select id="opciones" style="display: none;">
        <option disabled selected>Seleccione una opción</option>
        <?php 
          $conexion = mysqli_connect("localhost", "root", "administrador", "inventarioc");
          $querySelect = "SELECT n_inventario FROM inventario WHERE equipo='LAPTOP'";
          echo $querySelect;
          $resultado = mysqli_query($conexion, $querySelect);

          while($inventario = mysqli_fetch_array($resultado))
          {
            alert("a");
            echo "<option>".$inventario."</option>";
          }
        ?>
        
        <option><?php.$inventario['n_inventario'].;?></option>
        </select>

        <input type="checkbox" name="equipo1" id="equipo1" value=" Cable VGA" onchange="mostrarSelect1()">
        <select id="opciones1" style="display: none;">
        <option disabled selected>Seleccione una opción</option>
        <option>Opción 2.1</option>
        <option>Opción 2.2</option>
        <option>Opción 2.3</option>
        <option>Opción 2.4</option>
        </select>
        <label for="equipo1">Cable VGA </label>

        <input type="checkbox" name="equipo2" id="equipo2" value=" Bocinas" onchange="mostrarSelect2()">
        <select id="opciones2" style="display: none;">
        <option disabled selected>Seleccione una opción</option>
        <option>Opción 3.1</option>
        <option>Opción 3.2</option>
        <option>Opción 3.3</option>
        <option>Opción 3.4</option>
        </select>
        <label for="equipo2">Bocinas </label>

        <input type="checkbox" name="equipo3" id="equipo3" value=" Adaptador" onchange="mostrarSelect3()">
        <select id="opciones3" style="display: none;">
        <option disabled selected>Seleccione una opción</option>
        <option>Opción 4.1</option>
        <option>Opción 4.2</option>
        <option>Opción 4.3</option>
        <option>Opción 4.4</option>
        </select>
        <label for="equipo3">Adaptador </label><br>
        
        <input type="checkbox" name="equipo4" id="equipo4" value=" Extensión" onchange="mostrarSelect4()">
        <select id="opciones4" style="display: none;">
        <option disabled selected>Seleccione una opción</option>
        <option>Opción 5.1</option>
        <option>Opción 5.2</option>
        <option>Opción 5.3</option>
        <option>Opción 5.4</option>
        </select>
        <label for="equipo4">Extensión</label>
        
        <br /><br />

        <input type="button" class="send" value="Registrar Datos" onclick="validar();" />
      </form>
    </div>
    <p class="derecha grande identar"><b><i>Umizumi inc.</i></b></p>
</body>
</html>