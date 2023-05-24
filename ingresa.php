<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro guardado</title>
   <link rel="stylesheet" href="central-style.css">
</head>
<body>
    <div id="CreditsBtn">
      <ul>
        <li>
          <a href="formulario.php"> <span></span> 🡨 Inicio</a>
        </li>
      </ul>
    </div>
  <?php
      $equipo="| Laptop | ";
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
      //Paso 1: Guardamos la conexion en una variable
         $conexion = mysqli_connect("localhost", "root", "administrador", "inventarioc") or die("Hubo un problema al conectar con MySQL");
         //Paso 2: Creamos la consulta SQL
         $queryInsert = "INSERT INTO registros VALUES(
                         '#',
                         '".$_POST['ncuenta']."', 
                         '".$_POST['ncompleto']."',
                         '".$_POST['grapo']."',
                         '".$_POST['fecha']."',
                         '".$_POST['hora']."',
                         '".$equipos."'       
                          )";
                          
         //Paso 3: Ejecuto la consulta
                        mysqli_query($conexion,$queryInsert);           
  ?>
  <div id="CreditsBox">
      <div id="CreditsText">
        <h1 class="center" id="CreditsText">
          Ingreso de datos del prestamista
        </h1>
        <h3 id="CreditsText">Los datos recibidos son:</h3>
        <span id="CreditsText">No.Cuenta: </span
        ><?php echo $_POST['ncuenta']; ?><br /><br />
        <span id="CreditsText">Nombre completo: </span
        ><?php echo $_POST['ncompleto']; ?><br /><br />
        <span>Grado y grupo: </span
        ><?php echo $_POST['grapo']; ?><br /><br />
        <span id="CreditsText">Fecha: </span
        ><?php echo $_POST['fecha']; ?><br /><br />
        <span id="CreditsText">Hora: </span
        ><?php echo $_POST['hora']; ?><br /><br />
        <span id="CreditsText">Equipo(s): </span
        ><?php echo $equipos; ?><br /><br /><br />
        <span id="Warning"
          >¡Tienes hasta las 3 de la tarde del día de hoy para devolver el equipo prestado!</span
        >
      </div>
    </div>
</body>
</html>