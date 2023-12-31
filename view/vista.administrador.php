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
<body onload="readproduct()">
<div>
  <h1>Pedidos de los clientes</h1>
  <button ><a href="../view/mostrar.producto.administrador.php">pedidos</a></button>
</div>
    <div>
    <table class="table" id="tablepoke">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">nombre del producto</th>
                            <th scope="col">precio del producto</th>
                            <th scope="col">cantidad del producto</th>
                            <th scope="col">descripcion del producto</th>
                            <th scope="col">estado</th>
                            <th scope="col">funciones</th>
                           
                        </tr>
                    </thead>
                    <tbody id="tableBodyPoke">


                    </tbody>
                </table>
                <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="UpdateModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div>
            <input type="number" id="modprecio">
        </div>
        <div>
            <input type="number" id="modcantidad">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="updatedPoke()" data-bs-dismiss="modal">modificar</button>
      </div>
    </div>
  </div>
</div>
    </div>
    
</body>
</html>
<script src="../view/assets/js/inventario.js"></script>