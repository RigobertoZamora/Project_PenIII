<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administradores</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<?php
    $conexion = mysqli_connect("localhost", "root", "administrador", "inventarioc");
    //Conexión con la tabla "admins" en la BDD
    $comando = "SELECT * FROM admins";
    $resultado = mysqli_query($conexion, $comando);
    $validacion = mysqli_fetch_array($resultado);
    echo '<nav class="menu">
            <div class="contenedor">
            <ul> 
                <li><a href="formulario.php">CERRAR SESION</a></li>
                <li><a href="mostrar_datos1.php">REGISTROS ACTUALES</a></li>
                <li><a href="historial.php">HISTORIAL</a></li>
                <li><a href="inventario.php">INVENTARIO</a></li>
                <li><a href="administradores.php">ADMINISTRADORES</a></li>
            </ul>
            </div>
          </nav>';  
        echo "
        <br><h1><center>Control de administradores</center></h1>";
        echo "Usuario: ".$validacion['nombre'];

        $querySelect = "SELECT * FROM admins ORDER BY id ASC";

        $resultado = mysqli_query($conexion, $querySelect);
?>
    <!--La tabla principal al entrar en admins-->
        <table> 
            <tr>
               <th>ID</th>
               <th>Nombre Completo</th>
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
            echo "</table>";
        
?>
        <form method="post" class="salto1" action="formularioNA.php">
            <input type="submit" class="btnInit" value="Añadir Nuevo Administrador" />
        </form>
        
</body>
</html>