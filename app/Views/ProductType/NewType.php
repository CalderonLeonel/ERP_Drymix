
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Agregar Nuevo Tipo de Producto</h4>
                  <p class="card-description">
                    Aca podras agregar los tipos de productos producidos por la empresa
                  </p>
                  <form class="forms-sample" method="POST" id="formNewType" name="formNewType" action="<?php echo base_url('ProductTypeController/InsertProductType') ?>">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Nombre del Tipo de Producto</label>
                      <input type="text" class="form-control" id="productTypeName" name="productTypeName" placeholder="Nombre del Tipo de Producto">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Agregar</button>
                    <button class="btn btn-light">Cancelar</button>
                  </form>
                </div>
              </div>
            </div>
        </div>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->

