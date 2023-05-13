<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<?php
    $conexion = mysqli_connect("localhost", "root", "administrador", "inventarioc");
    //Conexión con la tabla "admins" en la BDD
    $comando = "SELECT * FROM admins WHERE correo='".$_POST['correo']."' AND password='".$_POST['password']."'";
    $resultado = mysqli_query($conexion, $comando);
    $validacion = mysqli_fetch_array($resultado);
    if($validacion['nombre']  == "")
    {
        echo '<ul> 
                <li><a href="formulario.php">CERRAR SESION</a></li>
                <li><a href="mostrar_datos1.php">REGISTROS ACTUALES</a></li>
                <li><a href="historial.php">HISTORIAL</a></li>
                <li><a href="inventario.php">INVENTARIO</a></li>
                <li><a href="administradores.php">ADMINISTRADORES</a></li>
            </ul>';  
        echo "
        <h1>Bienvenid@ al historial de entregados</h1>";
        echo "Usuario: ".$validacion['nombre'];

        $querySelect = "SELECT * FROM entregados ORDER BY id ASC";

        $resultado = mysqli_query($conexion, $querySelect);
?>
    <!--La tabla principal al entrar en admins-->
        <table> 
            <tr>
               <th>ID</th>
               <th>No.Cuenta</th>
               <th>Nombre Completo</th>
               <th>Grado y Grupo</th>
               <th>Fecha</th>
               <th>Hora</th>
               <th>Equipo(s)</th>
               <th>Acciones</th>
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
            echo "</table>";
        }//Este corchete es del else...
?>
        <form method="post" class="salto1" action="formularioNA.php">
            <input type="submit" class="btnInit" value="Añadir nuevo administrador" />
        </form>
</body>
</html>