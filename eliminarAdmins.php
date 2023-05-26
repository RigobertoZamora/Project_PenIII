<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipo eliminado</title>
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
<br><h1><center>Control de administradores</center></h1>
<!--Añadir una clase de estilos, en este boton y en los de inventario.php-->
<h3>El Administrador con el ID número "<?php echo $_GET['id']; ?>" ha sido eliminado exitosamente</h3>

<?php 
//Paso 1: Me conecto al servidor y guardo la conexion
$conexion = mysqli_connect("localhost", "root", "administrador","inventarioc");
$queryDelete = "DELETE FROM admins WHERE id =".$_GET['id'];
mysqli_query($conexion, $queryDelete);
?>

<h3>Administradores registrados actualmente:</h3><br>

<?php
//Paso 2: Crear la consulta SQL
$querySelect = "SELECT * FROM admins ORDER BY id ASC";

//Paso 3: EJecuto la consulta SQL y guardo el resultado
$resultado = mysqli_query($conexion, $querySelect);
?>

<table id="container"> 
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Password</th>
        <th>Acciones</th>
    </tr>

<?php
while($admins = mysqli_fetch_array($resultado))
{
    echo"
         <tr>
              <td>".$admins['id']."</td>
              <td>".$admins['nombre']."</td>
              <td>".$admins['correo']."</td>
              <td>".$admins['password']."</td>
              <td>
                    <a href='eliminarAdmins.php?id=".$admins['id']."'>Eliminar</a >
                    <a href='modificarAdmins.php?id=".$admins['id']."'>Modificar</a >
                    </td>

         </tr>
    ";
}
?>
</table>
        <form method="post" class="salto1" action="formularioNA.php">
            <input type="submit" class="btnInit" value="Añadir nuevo administrador" />
        </form>
</body>
</html>

