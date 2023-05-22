<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inventario añadido</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
  <ul>
    <li><a href="inventario.php">Regresar</a></li>
  </ul>
  <h1><center>Ingreso de datos del inventario</center></h1>
    <h3>Los datos recibidos son:</h3>
    <span>No.Inventario: </span><?php echo $_POST['ninventario']; ?><br>
    <span>Equipo: </span><?php echo $_POST['equipo']; ?><br>
    <span>Descripcion: </span><?php echo $_POST['descripcion']; ?><br>
    <span>No.Folio: </span><?php echo $_POST['nfolio']; ?><br>
    <span>Importe: </span><?php echo $_POST['importe']; ?><br>
    <span>Marca: </span><?php echo $_POST['marca']; ?><br>
    <span>Modelo: </span><?php echo $_POST['modelo']; ?><br>
    <span>Serie: </span><?php echo $_POST['serie']; ?><br>
    <span>Ubicacion: </span><?php echo $_POST['ubicacion']; ?><br>
    <span>Fecha de Resguardo: </span><?php echo $_POST['fechar']; ?><br>
    <span>BNL: </span><?php echo $_POST['bnl']; ?>
  <?php
      $consultaMysql = "a";
      $contadorLaptop = 0;
      $variable = $_POST['equipo'];
      switch($variable)
      {
        case "LAPTOP":
          $consultaMysql = "SELECT n_inventario FROM inventario WHERE equipo="$variable;
          break;
        case "CABLE VGA":
          $consultaMysql = "SELECT n_inventario FROM inventario WHERE equipo="$variable;
          break;
        case "BOCINAS":
          $consultaMysql = "SELECT n_inventario FROM inventario WHERE equipo="$variable;
          break;
        case "ADAPTADOR":
          $consultaMysql = "SELECT n_inventario FROM inventario WHERE equipo="$variable;
          break;
        case "EXTENSION":
          $consultaMysql = "SELECT n_inventario FROM inventario WHERE equipo="$variable;
          break;
      }
      //Paso 1: Guardamos la conexion en una variable
         $conexion = mysqli_connect("localhost", "root", "administrador", "inventarioc") or die("Hubo un problema al conectar con MySQL");
         //Paso 2: Creamos la consulta SQL
         $queryInsert = "INSERT INTO inventario VALUES(
                         '#',
                         '".$_POST['ninventario']."',
                         '".$_POST['equipo']."',
                         '".$_POST['descripcion']."',
                         '".$_POST['nfolio']."',
                         '".$_POST['importe']."',
                         '".$_POST['marca']."',
                         '".$_POST['modelo']."',
                         '".$_POST['serie']."',
                         '".$_POST['ubicacion']."',
                         '".$_POST['fechar']."',
                         '".$_POST['bnl']."'
                          )";
         //Paso 3: Ejecuto la consulta
                        mysqli_query($conexion,$queryInsert);            
  ?>
</body>
</html>