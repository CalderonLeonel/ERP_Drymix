<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Formulario de Venta</h1>
        </div>
        <div class="col-sm-6">

        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Formulario de Venta</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <form action="" id="FormRegSale" enctype="multipart/form-data">
          <h2>Cliente</h2>
            <div class="row">
              <div class="col-md-6">
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Buscar Cliente" aria-label="Recipient's username" aria-describedby="basic-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" onclick="MBuscarCliente()"><i class="fas fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-3">
                <label for="nameClient">Nombre Cliente:</label>
                <input type="text" name="nameClient" id="nameClient" class="form-control">
              </div>
              <div class="col-md-3">
                <label for="nitClient">NIT/CI:</label>
                <input type="text" name="nitClient" id="nitClient" class="form-control">
              </div>
              <div class="col-md-3">
                <label for="nitClient">Apellido Paterno:</label>
                <input type="text" name="nitClient" id="nitClient" class="form-control">
              </div>
              <div class="col-md-3">
                <label for="nitClient">Apellido Materno:</label>
                <input type="text" name="nitClient" id="nitClient" class="form-control">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-3">
                <label for="nameClient">Telefono Cliente:</label>
                <input type="text" name="nameClient" id="nameClient" class="form-control">
              </div>
              <div class="col-md-3">
                <label for="nitClient">Celular Cliente:</label>
                <input type="text" name="nitClient" id="nitClient" class="form-control">
              </div>
              <div class="col-md-3">
                <label for="nitClient">Empresa/Entidad Cliente:</label>
                <input type="text" name="nitClient" id="nitClient" class="form-control">
              </div>
              <div class="col-md-3">
                <label for="nitClient">Tipo Cliente:</label>
                <input type="text" name="nitClient" id="nitClient" class="form-control">
              </div>
            </div>
            <br>
            <h2>Producto</h2>
            <div class="row">
              <div class="col-md-6">
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Buscar Producto" aria-label="Recipient's username" aria-describedby="basic-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" onclick="MBuscarProducto()"><i class="fas fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-3">
                <label for="codProduct">Codigo Producto:</label>
                <input type="text" name="nameProduct" id="nameProduct" class="form-control">
              </div>
              <div class="col-md-3">
                <label for="nitClient">Tipo Producto:</label>
                <input type="text" name="typeProd" id="typeProd" class="form-control">
              </div>
              <div class="col-md-3">
                <label for="nitClient">Formato:</label>
                <input type="text" name="forProd" id="forProd" class="form-control">
              </div>
              <div class="col-md-3">
                <label for="nitClient">Linea:</label>
                <input type="text" name="lineProd" id="lineProd" class="form-control">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-3">
                <label for="nameProduct">Nombre Producto:</label>
                <input type="text" name="nameProduct" id="nameProducto" class="form-control">
              </div>
              <div class="col-md-3">
                <label for="nitClient">Descripcion Producto:</label>
                <input type="text" name="descProd" id="descProd" class="form-control">
              </div>
              <div class="col-md-3">
                <label for="nitClient">Cantidad:</label>
                <input type="text" name="quantity" id="quantity" class="form-control">
              </div>
              <div class="col-md-3">
                <label for="nitClient">Total:</label>
                <input type="text" name="total" id="total" class="form-control">
              </div>
            </div>
          </form>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </section>
  <!-- /.content -->