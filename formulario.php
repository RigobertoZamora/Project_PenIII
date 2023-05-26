<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro del préstamo</title>
    <link rel="stylesheet" href="central-style.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="funciones.js"></script>
</head>

<body>
<!--------------------------------------------------------->
  <nav id="webgui">
      <ul>
        <li>
          <a href="loginn.html"><span></span>ADMINISTRADOR</a>
        </li>
        <li>
          <a href="acerca.html"><span></span>ACERCA DE...</a>
        </li>
      </ul>
  </nav>
<!----------------------------------------------------------->
    <div id="formulario" class="login-box">
        <p class="selecequip">Ingresa los datos del prestamista</p>
        <br>
        <form method="post" action="ingresa.php" name="formulario">
          <div class="user-box">
            <input
              type="text"
              id="ncuenta"
              name="ncuenta"
              class="input"
              placeholder="Ingresa el numero de cuenta"
            />
            <label for="ncuenta">Numero de Cuenta: </label>
          </div>
          <br /><br />
          <div class="user-box">
            <input
              type="text"
              id="ncompleto"
              name="ncompleto"
              class="input"
              placeholder="Ingresa el nombre completo"
            />
            <label for="ncompleto">Nombre Completo: </label>
          </div>

          <div class="user-box">
            <h5>Grado y Grupo: </h5>
            <select id="grapo" name="grapo">
              <option selected disabled>Seleccione su grado y grupo</option>
              <option value="1a">1° "A"</option>
              <option value="1b">1° "B"</option>
              <option value="1c">1° "C"</option>
              <option value="1d">1° "D" </option>
              <option value="1e">1° "E" </option>
              <option value="1f">1° "F" </option>
              <option value="1a">2° "A"</option>
              <option value="1b">2° "B"</option>
              <option value="1c">2° "C"</option>
              <option value="1d">2° "D" </option>
              <option value="1e">2° "E" </option>
              <option value="1f">2° "F" </option>
              <option value="1a">3° "A"</option>
              <option value="1b">3° "B"</option>
              <option value="1c">3° "C"</option>
              <option value="1d">3° "D" </option>
              <option value="1e">3° "E" </option>
              <option value="1f">3° "F" </option>
              <option value="1a">4° "A"</option>
              <option value="1b">4° "B"</option>
              <option value="1c">4° "C"</option>
              <option value="1d">4° "D" </option>
              <option value="1e">4° "E" </option>
              <option value="1f">4° "F" </option>
              <option value="1a">5° "A"</option>
              <option value="1b">5° "B"</option>
              <option value="1c">5° "C"</option>
              <option value="1d">5° "D" </option>
              <option value="1e">5° "E" </option>
              <option value="1f">5° "F" </option>
              <option value="1a">6° "A"</option>
              <option value="1b">6° "B"</option>
              <option value="1c">6° "C"</option>
              <option value="1d">6° "D" </option>
              <option value="1e">6° "E" </option>
              <option value="1f">6° "F" </option>
            </select>
          </div>
          <br>
<?php
          date_default_timezone_set('America/Chihuahua');
          $fecha = date("Y-m-d");
          $hora = date("H:i:s");
?>
        <div class="user-box">
          <input
            type="text"
            id="fecha"
            name="fecha"
            class="input"
            value="<?php echo $fecha; ?>"
            readonly
          />
        </div>
        <div class="user-box">
          <input
            type="text"
            id="hora"
            name="hora"
            class="input"
            value="<?php echo $hora; ?>"
            readonly
          />
        </div>        
        <h1 class="centrado grande identar" id="selecequip">
          Selecciona equipo(s)
        </h1>
        
        <input
          type="checkbox"
          name="equipo"
          id="equipo"
          value=" Laptop"
          onchange="mostrarSelect();"
        />
        <label for="equipo">Laptop</label>
        <select id="opciones" style="display: none">
          <option disabled selected>Seleccione el N° de Inventario</option>
          <option>Opción 1.1</option>
          <option>Opción 1.2</option>
          <option>Opción 1.3</option>
          <option>Opción 1.4</option>
        </select>
        <br /><br />
        
        <input
          type="checkbox"
          name="equipo1"
          id="equipo1"
          value=" Cable VGA"
          onchange="mostrarSelect1();"
        />
        <label for="equipo1">Cable VGA </label>
        <select id="opciones1" style="display: none">
          <option disabled selected>Seleccione el N° de Inventario</option>
          <option>Opción 2.1</option>
          <option>Opción 2.2</option>
          <option>Opción 2.3</option>
          <option>Opción 2.4</option>
        </select>
        <br /><br />
        
        <input
          type="checkbox"
          name="equipo2"
          id="equipo2"
          value=" Bocinas"
          onchange="mostrarSelect2();"
        />
        <label for="equipo2">Bocinas </label>
        <select id="opciones2" style="display: none">
          <option disabled selected>Seleccione el N° de Inventario</option>
          <option>Opción 3.1</option>
          <option>Opción 3.2</option>
          <option>Opción 3.3</option>
          <option>Opción 3.4</option>
        </select>
        <br /><br />

        <input
          type="checkbox"
          name="equipo3"
          id="equipo3"
          value=" Adaptador"
          onchange="mostrarSelect3();"
        />
        <label for="equipo3">Adaptador </label>
        <select id="opciones3" style="display: none">
          <option disabled selected>Seleccione el N° de Inventario</option>
          <option>Opción 4.1</option>
          <option>Opción 4.2</option>
          <option>Opción 4.3</option>
          <option>Opción 4.4</option>
        </select>
        <br /><br />
        
        <input
          type="checkbox"
          name="equipo4"
          id="equipo4"
          value=" Extensión"
          onchange="mostrarSelect4();"
        />
        <label for="equipo4">Extensión</label>
        <select id="opciones4" style="display: none">
          <option disabled selected>Seleccione el N° de Inventario</option>
          <option>Opción 5.1</option>
          <option>Opción 5.2</option>
          <option>Opción 5.3</option>
          <option>Opción 5.4</option>
        </select>
        <br /><br />

        <a onclick="validar();">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          Registrar Datos
        </a>
      </form>
    </div>
    <p class="derecha grande identar">
    <b><i>Umizumi inc.</i></b>
    </p>
</body>
</html>