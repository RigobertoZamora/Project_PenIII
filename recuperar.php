<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de eliminado</title>
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
<br><h1><center>Recuperando Datos del prestamista</center></h1>
<h3>El prestamista con ID recuperado es: </h3>

<?php echo $_GET['id']; ?>
<?php 
// Paso 1: Conectar al servidor y guardar la conexión
$conexion = mysqli_connect("localhost", "root", "administrador", "inventarioc");

// Paso 2: Obtener los datos del prestamista que se eliminará
$querySelect = "SELECT * FROM entregados WHERE id =" . $_GET['id'];
$resultado = mysqli_query($conexion, $querySelect);
$prestamista = mysqli_fetch_array($resultado);

// Paso 3: Eliminar el prestamista de la tabla entregados
$queryDelete = "DELETE FROM entregados WHERE id =" . $_GET['id'];
mysqli_query($conexion, $queryDelete); 

// Paso 4: Mover el registro eliminado a la tabla inventario
$queryInsert = "INSERT INTO registros (No_cuenta, Nombre, grapo, fecha, hora, equipo) VALUES ('".$prestamista['No_cuenta']."', '".$prestamista['Nombre']."', '".$prestamista['grapo']."', '".$prestamista['fecha']."', '".$prestamista['hora']."', '".$prestamista['equipo']."')";
mysqli_query($conexion, $queryInsert);
?>

<h3>Los Prestamistas registrados son:</h3><br>

<?php
// Paso 5: Mostrar la tabla actualizada
$querySelect = "SELECT * FROM entregados ORDER BY nombre ASC";
$resultado = mysqli_query($conexion, $querySelect);
?>

<table id="container"> 
    <tr>
       <th>ID</th>
       <th>No.Cuenta</th>
       <th>Nombre Completo</th>
       <th>Grado y Grupo</th>
       <th>Fecha</th>
       <th>Hora</th>
       <th>Equipo</th>
    </tr>

<?php
while($entregados = mysqli_fetch_array($resultado))
{
    echo"
         <tr>
              <td>".$entregados['id']."</td>
              <td>".$entregados['No_cuenta']."</td>
              <td>".$entregados['Nombre']."</td>
              <td>".$entregados['grapo']."</td>
              <td>".$entregados['fecha']."</td>
              <td>".$entregados['hora']."</td>
              <td>".$entregados['equipo']."</td>
              <td>
                    <a href='eliminar.php?id=".$entregados['id']."'>Eliminar</a>
                    <a href='recuperar.php?id=".$entregados['id']."'>Recuperar</a>

                    </td>
        
         </tr>
    ";
}
?>
</table>
</body>
</html>
           