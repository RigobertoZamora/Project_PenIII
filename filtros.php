<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de inventario</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    
<?php
    /*if(isset($_POST['equipo'])) {
        echo "El formulario se envió correctamente";
    } else {
        echo "El formulario no se envió correctamente";
    }*/
    $conexion = mysqli_connect("localhost", "root", "administrador", "inventarioc");

    //Preguntar a César si esto se puede poner en inventario.php
    
    $filtro = $_POST['equipo'];
        switch($filtro)
        {
            case 'Laptop':
                $querySelect = "SELECT * FROM inventario WHERE equipo='LAPTOP' ORDER BY id ASC";
                break;
            case 'Cable vga':
                $querySelect = "SELECT * FROM inventario WHERE equipo='CABLE VGA' ORDER BY id ASC";
                break;
            case 'Bocinas':
                $querySelect = "SELECT * FROM inventario WHERE equipo='BOCINAS' ORDER BY id ASC";
                break;
            case 'Adaptador':
                $querySelect = "SELECT * FROM inventario WHERE equipo='ADAPTADOR' ORDER BY id ASC";
                break;
            case 'Extension':
                $querySelect = "SELECT * FROM inventario WHERE equipo='LAPTOP' ORDER BY id ASC";
                break;
            default:
                $querySelect = "SELECT * FROM inventario ORDER BY id ASC";
                break;
        }
    if($filtro == "")
    {
        $filtro = "Todos los elementos";
    }
    $resultado = mysqli_query($conexion, $querySelect);
 ?>
 <!--Sección de la lista (me encanta este separador)--------------------------->
        <ul> 
            <li><a href="formulario.php">CERRAR SESION</a></li>
            <li><a href="mostrar_datos1.php">REGISTROS ACTUALES</a></li>
            <li><a href="historial.php">HISTORIAL</a></li>
            <li><a href="inventario.php">INVENTARIO</a></li>
            <li><a href="administradores.php">ADMINISTRADORES</a></li>
        </ul>  
<!----------------------------------------------------------------------------->
        <h1>Inventario del centro de computo principal</h1>
        <h3>Vista actual del inventario: <?php echo"$filtro";?></h3>
        <h3>Selecciona un tipo de equipo para una visualización más precisa:</h3>
        <form method="post" action="filtros.php" name="filtro">
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
    
        <br><br>
    <!--La tabla principal al entrar en admins-->
        <table> 
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
            echo "</table>";
        //switch de las opciones del select    


?>
    <br><br>
        <form method="post" class="salto1" action="formularioNA.php">
            <input type="submit" class="btnInit" value="Añadir nuevo administrador" />
        </form>
        <form method="post" class="salto1" action="formularioNI.php">
            <input type="submit" class="btnInit" value="Añadir nuevo inventario" />
        </form>
</body>
</html>