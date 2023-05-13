<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro eliminado</title>
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
<h1><center>Eliminando Datos del prestamista</center></h1>
<h3>El prestamista con ID eliminado es: </h3>

<?php echo $_GET['id']; ?>
<?php 
//Paso 1: ME conecto al servidor y guardo la conexion
$conexion = mysqli_connect("localhost", "root", "administrador","inventarioc");
$queryDelete = "DELETE FROM entregados WHERE id =".$_GET['id'];
mysqli_query($conexion, $queryDelete);                      
?>

<h3>Los Prestamistas registrados son:</h3><br>

<?php


//Paso 2: Crear la consulta SQL
$querySelect = "SELECT * FROM entregados ORDER BY nombre ASC";

//Paso 3: EJecuto la consulta SQL y guardo el resultado
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
                    <a href='eliminar.php?id=".$entregados['id']."'>Eliminar</a >
                    <a href='recuperar.php?id=".$entregados['id']."'>Recuperar</a >
                    </td>

         </tr>
    ";
}
?>
</table>
<br><br>
        <form method="post" class="salto1" action="formularioNA.php">
            <input type="submit" class="btnInit" value="Añadir nuevo administrador" />
        </form>
 
</body>
</html>

