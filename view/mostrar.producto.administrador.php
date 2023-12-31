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
        <div>
        <div>
    <table class="table" id="tablepoke">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">codigos del pedido</th>
                            <th scope="col">nombre del cliente</th>
                            <th scope="col">direccion</th>
                            <th scope="col">telefono</th>
                            <th scope="col">Total de pedido</th>
                            <th scope="col">forma de pago</th>
                            <th scope="col">fecha de envio</th>
                            <th scope="col">estado del pedido</th>

                            <th scope="col">estado</th>
                           
                        </tr>
                    </thead>
                    <tbody id="tableBodyPoke">


                    </tbody>
                </table>
        </div>

    </div>
    <div class="modal fade" id="UpdateModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <table class="table" id="tablepoke">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">nombre del producto</th>
                            <th scope="col">cantidad</th>
                           
                        
                           
                        </tr>
                    </thead>
                    <tbody id="idview">


                    </tbody>
                </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary" onclick="updateQuantity()" data-bs-dismiss="modal">modificar</button> -->
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="UpdateEstad" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="form-floating">
            <select id="estadoP" class="form-control">
            <option value="pendiente" >Pendiente</option>
                <option value="eviado">Enviado</option>
                <option value="cancelado">Cancelado</option>
            </select>
           
            <label for="floatingInput">Forma de pago</label>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="updateEstado()" data-bs-dismiss="modal">modificar</button>
        <!-- <button type="button" class="btn btn-primary" onclick="updateQuantity()" data-bs-dismiss="modal">modificar</button> -->
      </div>
    </div>
  </div>
</div>

</body>
</html>
<script src="../view/assets/js/mostrar.vista.pedido.js"></script>