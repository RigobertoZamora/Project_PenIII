<!DOCTYPE html>
<html>
 <head>
  <title>Administrador añadido</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
<!------------------------------------------------------------->
  <ul>
    <li><a href="mostrar_datos1.php">Regresar</a></li>
  </ul>
<!------------------------------------------------------------->
  <h1><center>Nuevo administrador añadido exitosamente</center></h1>
     <h3>Los datos que se recibieron son:</h3>
     <span>Nombre completo: </span><?php echo $_POST['ncompletona']; ?><br>     
     <span>Correo: </span><?php echo $_POST['correona']; ?><br>
     <span>Contraseña: </span><?php echo $_POST['passwordna']; ?><br>

     <?php
     
       $conexion = mysqli_connect("localhost", "root", "administrador", "inventarioc") or die("Hubo un problema al conectar con MySQL");

       
       $queryInsert = "INSERT INTO admins VALUES(
                       '#',
                       '".$_POST['ncompletona']."', 
                       '".$_POST['correona']."',
                       '".$_POST['passwordna']."'      
       	                )";
       
       	              mysqli_query($conexion,$queryInsert);
     ?>

</body>
</html>