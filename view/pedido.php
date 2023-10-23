<?php 
session_start();

$idUsuario = isset($_SESSION["id"]) ? $_SESSION["id"]: "";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../view/assets/css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid">
    <div class="">
    <table id="tablerol" class="table  ">
      <thead>
        <tr>

          <th scope="col" width="30%">nombre</th>
          <th scope="col" width="45%">apariencia</th>
          <th scope="col">cantidad</th>
          <th scope="col">precio</th>
          <th scope="col">funcion</th>
        </tr>
      </thead>
      <tbody id="tableBOdypoke">

      </tbody>
    </table>
    <div >
        <h1>total</h1>
   <h1 id="txtpedido" ></h1>
    </div>
  </div>
  <div>
    <div>
        <input type="text" placeholder="nombre" id="txtnombre">
    </div>
    <div>
        <input type="text" placeholder="direccion" id="txtdireccion">
    </div>
    <div>
        <input type="text" placeholder="telefono" id="txtTelefono">
    </div>
   
    <div>
    <div class="form-floating">
            <select name="" id="formpago" class="form-control">
                <option value="" selected disabled>Seleccionar</option>
                <option value="Transferencia">Transferencia</option>
                <option value="Contraentrega">Contraentrega</option>
                <option value="Consignacion">Consignacion</option>
            </select>
           
            <label for="floatingInput">Forma de pago</label>
        </div> 
    </div>
    <div>
       <input type="date" placeholder="fecha" id="txtfecha"> 
    </div>
  

    </div>
    <div>
    <input type="text" id="txtidRol" value="<?php echo $idUsuario ?>">
    
    </div>
    <div> 
        <button onclick="enviarDatos()">confirmar el pedido</button>
    </div>
  </div>
    </div>
    <div class="modal fade" id="UpdateModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div>
        <h2 id="pokemonCompra"></h2>
        </div>
        <div>
            cantidad:<input type="number" id="modcantidad">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="updateQuantity()" data-bs-dismiss="modal">modificar</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>
<script src="../view/assets/js/formulario.compra.js"></script>