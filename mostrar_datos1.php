<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Préstamos vigentes</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<?php
    //$validacion = $_POST['nombre'];
    $conexion = mysqli_connect("localhost", "root", "administrador", "inventarioc");
        echo '<ul> 
                <li><a href="formulario.php">CERRAR SESION</a></li>
                <li><a href="mostrar_datos1.php">REGISTROS ACTUALES</a></li>
                <li><a href="historial.php">HISTORIAL</a></li>
                <li><a href="inventario.php">INVENTARIO</a></li>
                <li><a href="administradores.php">ADMINISTRADORES</a></li>
            </ul>';  
        echo "
        <h1>Bienvenido al Sistema</h1>";
        echo "Usuario: ".$validacion['nombre'];

        $querySelect = "SELECT * FROM registros ORDER BY id ASC";

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
        while($inventario = mysqli_fetch_array($resultado))
        {
            echo"
                 <tr>
                      <td>".$inventario['id']."</td>
                      <td>".$inventario['No_cuenta']."</td>
                      <td>".$inventario['Nombre']."</td>
                      <td>".$inventario['grapo']."</td>
                      <td>".$inventario['fecha']."</td>
                      <td>".$inventario['hora']."</td>
                      <td>".$inventario['equipo']."</td>
                      <td>
                            <a href='eliminaAHistorial.php?id=".$inventario['id']."'>Entregado</a >
                            <a href='modificar.php?id=".$inventario['id']."'>Modificar</a >
                            </td>

                 </tr>
            ";
        }
            echo "</table>";
?>
        <form method="post" class="salto1" action="formularioNA.php">
            <input type="submit" class="btnInit" value="Añadir nuevo administrador" />
        </form>
</body>
</html>