<div class="content-wrapper">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Editar Linea</h4>
        <div class="row">
          <div class="col-12">
          <form class="forms-sample" method="POST" id="formEditProduct" name="formEditProduct" action="<?php echo base_url('LinesController/UpdateLine') ?>">        
            <?php 
            foreach($table as $row)
            {
            ?>
            <div class="form-group">
              <label for="exampleInputUsername1">Nombre de la Linea</label>
              <input type="text" class="form-control" id="lineName" name="lineName" value="<?php echo $row->lineName?>">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-success">Actualizar</button>
              <button type="button" class="btn btn-light">Volver</button>
            </div>
            <?php
            }
            ?>
          </form>
          </div>
        </div>
    </div>
  </div>
</div>
