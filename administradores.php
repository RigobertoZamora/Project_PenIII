<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administradores</title>
    <link rel="stylesheet" href="central-style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <nav role="navigation">
        <div id="menuToggle">
            <input type="checkbox"/>
            <span></span>
            <span></span>
            <span></span>
            <ul id="menu">
                <a href="formulario.php"><li>Cerrar Sesion</li></a>
                <a href="mostrar_datos1.php"><li>Registros Actuales</li></a>
                <a href="historial.php"><li>Historial</li></a>
                <a href="inventario.php"><li>Inventario</li></a>
                <a href="administradores.php"><li>Administradores</li></a>
            </ul>
        </div>
    </nav>

<?php
    $conexion = mysqli_connect("localhost", "root", "administrador", "inventarioc");
    //Conexión con la tabla "admins" en la BDD
    $comando = "SELECT * FROM admins";
    $resultado = mysqli_query($conexion, $comando);
    $validacion = mysqli_fetch_array($resultado); 
        echo "
        <br><h1><center>Control de administradores</center></h1>";
        echo "Usuario: ".$validacion['nombre'];

        $querySelect = "SELECT * FROM admins ORDER BY id ASC";

        $resultado = mysqli_query($conexion, $querySelect);
?>
    <!--La tabla principal al entrar en admins-->
        <table id="container"> 
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