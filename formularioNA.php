<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo administrador</title>
    <link rel="stylesheet" href="style.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="funciones.js"></script>
</head>
<body>
<!--No entiendo porqué no adopta el estilo que debe de ser-->
  <div id="CreditsBtn">
      <ul>
        <li>
          <a href="#" onclick="window.history.back();"> <span></span> 🡨 Inicio</a>
        </li>
      </ul>
    </div>

<!--Adaptar este formulario al estilo del principal-->
    <div id="formulario" class="centrado form">
        <p class="centrado grande identar">Ingresa los datos del nuevo administrador</p>

      <form method="post" action="ingresaNA.php" name="formularioNA" >

        <input
          type="text"
          id="ncompletona"
          name="ncompletona"
          class="input"
          placeholder="Ingresa el Nombre Completo"
        />
        <br /><br />
        <input
          type="text"
          id="correona"
          name="correona"
          class="input"
          placeholder="Ingresa el Correo"
        />
        <br /><br />
        <input
          type="password"
          id="passwordna"
          name="passwordna"
          class="input"
          placeholder="Ingresa la Contraseña"
        />
        <!--<select id="equipo" class="input" name="equipo">
          <option selected disabled>Selecciona equipo</option>
          <option value="laptop">Laptop</option>
          <option value="cable vga">Cable VGA</option>
          <option value="bocinas">Bocinas</option>
          <option value="adaptador">Adaptador</option>
          <option value="etension">Extension</option>
        </select>
         -->
        <input type="button" class="send" value="Registrar Nuevo Administrador" onclick="validarNA();" />
      </form>
    </div>
    <br><br><br><p class="derecha grande identar"><b><i>Umizumi inc.</i></b></p>
  </body>
</html>