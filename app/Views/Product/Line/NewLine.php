
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Agregar Nueva Linea de Producto</h4>
                  <p class="card-description">
                    Aca podras agregar las lineas de productos producidos por la empresa
                  </p>
                  <form class="forms-sample" method="POST" id="formNewLine" name="formNewLine" action="<?php echo base_url('LineController/InsertLine') ?>">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Nombre del Tipo de Producto</label>
                      <input type="text" class="form-control" id="lineName" name="lineName" placeholder="Nombre de la Linea de Producto">
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

