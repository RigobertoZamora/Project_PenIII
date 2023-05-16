<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo inventario</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="funciones.js"></script>
  </head>
  <body>
  <nav class="menu">
  <div class="contenedor">
  <ul>
    <li><a href="inventario.php">Regresar</a></li>
  </ul>
</div>
</nav>
    <div id="formulario" class="centrado form">
        <p class="centrado grande identar">Ingresa los datos del nuevo inventario</p>

      <form method="post" action="ingresaNI.php" name="formularioNI" >

        <input type="text" id="ninventario" name="ninventario" class="input" placeholder="Ingresa el numero de inventario"/>
        <br/><br/>
        <select id="equipo" class="input" name="equipo">
          <option selected disabled>Selecciona equipo</option>
          <option value="LAPTOP">Laptop</option>
          <option value="CABLE VGA">Cable VGA</option>
          <option value="BOCINAS">Bocinas</option>
          <option value="ADAPTADOR">Adaptador</option>
          <option value="EXTENSION">Extension</option>
        </select>
        <br/><br/>
        <input type="text" id="descripcion" name="descripcion" class="input" placeholder="Ingresa descripcion"/>
        <br/><br/>
        <input type="text" id="nfolio" name="nfolio" class="input" placeholder="Ingresa el numero de folio"/>
        <br/><br/>
        <input type="text" id="importe" name="importe" class="input" placeholder="Ingresa el importe"/>
        <br/><br/>
        <input type="text" id="marca" name="marca" class="input" placeholder="Ingresa la marca"/>
        <br/><br/>
        <input type="text" id="modelo" name="modelo" class="input" placeholder="Ingresa el modelo"/>
        <br/><br/>
        <input type="text" id="serie" name="serie" class="input" placeholder="Ingresa la serie"/>
        <br/><br/>
        <input type="text" id="ubicacion" name="ubicacion" class="input" placeholder="Ingresa la ubicacion"/>
        <br/><br/>
        <input type="date" id="fechar" name="fechar" class="input" placeholder="Inicia por año completo, mes y día"/>
        <br/><br/>
        <input type="text" id="bnl" name="bnl" class="input" placeholder="¿Venia en el envio?"/>
        <br><br>
        <input type="button" class="send" value="Registrar Nuevo Inventario" onclick="NoFuncionaPQ()"/>
      </form>
    </div>
    <br><br><br>
    <p class="derecha grande identar"><b><i>Umizumi inc.</i></b></p>
  </body>
</html>