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

<!----------------------------Lista---------------------------->
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
<br><h1><center>Inventario del centro de cómputo principal</center></h1>
<br><h3>Selecciona un tipo de equipo para una visualización más precisa:</h3>
        <form method="post" action="filtros.php" name="formulario">
            <select id="equipo" class="input" name="equipo">
                <option selected disabled>Selecciona equipo</option>
                <option value="Laptop">Laptop</option>
                <option value="Cable vga">Cable VGA</option>
                <option value="Bocinas">Bocinas</option>
                <option value="Adaptador">Adaptador</option>
                <option value="Extension">Extension</option>
            </select>
            <input type="submit" value="Aplicar Filtro" onclick="validarEquipo();"/>
            <!--Añadir una clase de estilos, en este boton y en los de inventario.php-->
        </form>  
<h3>¡Proceso exitoso!, el equipo con ID eliminado es: <?php echo $_GET['id']; ?> </h3>
<?php 
//Paso 1: Me conecto al servidor y guardo la conexion
$conexion = mysqli_connect("localhost", "root", "administrador","inventarioc");
$queryDelete = "DELETE FROM inventario WHERE id =".$_GET['id'];
mysqli_query($conexion, $queryDelete);
?>

<h3>Los equipos registrados son:</h3><br>

<?php


//Paso 2: Crear la consulta SQL
$querySelect = "SELECT * FROM inventario ORDER BY id ASC";

//Paso 3: EJecuto la consulta SQL y guardo el resultado
$resultado = mysqli_query($conexion, $querySelect);
?>

<table id="container"> 
    <tr>
        <th>ID</th>
        <th>No. Inventario</th>
        <th>Equipo</th>
        <th>Descripción</th>
        <th>No. Folio</th>
        <th>Importe</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Serie</th>
        <th>Ubicación</th>
        <th>Fecha de Resguardo</th>
        <th>BNL</th>
        <th>Acciones</th>
    </tr>

<?php
while($inventario = mysqli_fetch_array($resultado))
{
    echo"
         <tr>
              <td>".$inventario['id']."</td>
              <td>".$inventario['n_inventario']."</td>
              <td>".$inventario['equipo']."</td>
              <td>".$inventario['descripcion']."</td>
              <td>".$inventario['n_folio']."</td>
              <td>".$inventario['importe']."</td>
              <td>".$inventario['marca']."</td>
              <td>".$inventario['modelo']."</td>
              <td>".$inventario['serie']."</td>
              <td>".$inventario['ubicacion']."</td>
              <td>".$inventario['fecha_resguardo']."</td>
              <td>".$inventario['bnl']."</td>
              <td>
                    <a href='eliminarInv.php?id=".$inventario['id']."'>Eliminar</a >
                    <a href='modificarInv.php?id=".$inventario['id']."'>Modificar</a >
                    </td>

         </tr>
    ";
}
?>
</table>
        <form method="post" class="salto1" action="formularioNA.php">
            <input type="submit" class="btnInit" value="Añadir nuevo administrador" />
        </form>
        <form method="post" class="salto1" action="formularioNI.php">
            <input type="submit" class="btnInit" value="Añadir nuevo inventario" />
        </form>
</body>
</html>

