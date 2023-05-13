<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de eliminado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!--Lista-->
<ul> 
    <li><a href="formulario.php">INSERTAR REGISTRO</a></li>
    <li><a href="mostrar_datos.php">REGISTROS ACTUALES</a></li>
    <li><a href="historial.php">HISTORIAL</a></li>
    <li><a href="inventario.php">INVENTARIO</a></li>
</ul>
<!--------------------------------------------------------------->

<h3>El prestamista con ID "<?php echo $_GET['id']; ?>" ha entregado el equipo</h3>

<?php
          date_default_timezone_set('America/Chihuahua');
          $fecha = date("Y-m-d");
          $hora = date("H:i:s");
        ?>
        <input
          type="hidden"
          id="fecha"
          name="fecha"
          value="<?php echo $fecha; ?>"
          readonly
        />
        <br /><br />
        <input
          type="hidden"
          id="hora"
          name="hora"
          value="<?php echo $hora; ?>"
          readonly
        />
        <br />




<?php 
// Paso 1: Conectar al servidor y guardar la conexión
$conexion = mysqli_connect("localhost", "root", "administrador", "inventarioc");

// Paso 2: Obtener los datos del prestamista que se eliminará
$querySelect = "SELECT * FROM registros WHERE id =" . $_GET['id'];
$resultado = mysqli_query($conexion, $querySelect);
$prestamista = mysqli_fetch_array($resultado);

// Paso 3: Eliminar el prestamista de la tabla inventario
$queryDelete = "DELETE FROM registros WHERE id =" . $_GET['id'];
mysqli_query($conexion, $queryDelete); 

// Paso 4: Mover el registro eliminado a la tabla entregados
$fechaActual = date("Y-m-d");
$horaActual = date("H:i:s");
$queryInsert = "INSERT INTO entregados (No_cuenta, Nombre, grapo, fecha, hora, equipo) VALUES ('".$prestamista['No_cuenta']."', '".$prestamista['Nombre']."', '".$prestamista['grapo']."', '".$fechaActual."', '".$horaActual."', '".$prestamista['equipo']."')";
mysqli_query($conexion, $queryInsert);

?>

<br>

<?php
// Paso 5: Mostrar la tabla actualizada
$querySelect = "SELECT * FROM registros ORDER BY nombre ASC";
$resultado = mysqli_query($conexion, $querySelect);
?>

<table> 
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
while($registros = mysqli_fetch_array($resultado))
{
    echo"
         <tr>
              <td>".$registros['id']."</td>
              <td>".$registros['No_cuenta']."</td>
              <td>".$registros['Nombre']."</td>
              <td>".$registros['grapo']."</td>
              <td>".$registros['fecha']."</td>
              <td>".$registros['hora']."</td>
              <td>".$registros['equipo']."</td>
              <td>
                    <a href='eliminaAHistorial.php?id=".$registros['id']."'>Entregar</a>
                    </td>
        
         </tr>
    ";
}
?>
</table>
</body>
</html>
           