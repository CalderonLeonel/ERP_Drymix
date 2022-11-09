<div class="modal fade" id="editProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Producto</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  class="forms-sample" method="POST" id="formEditProduct" name="formEditProduct" action="<?php echo base_url('ProductsController/UpdateProduct') ?>">
          <div class="form-group">
            <label for="exampleInputUsername1">Nombre del Producto</label>
            <input type="text" class="form-control" id="productName" name="productName">
          </div>
          <div class="form-group">
            <label class="col-sm-3 col-form-label">Tipo de Producto</label>
            <div class="col-sm-12">
              <select class="form-control" id="idTypes" name="idTypes">
                <?php 
                foreach ($table as $row)
                  {
                    ?>
                    <option value="<?php $row->idProductType; ?>"><?php echo $row->productTypeName; ?></option>
                                  
                    <?php
                  }
                ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 col-form-label">Formato del Producto</label>
            <div class="col-sm-12">
              <select class="form-control" id="idFormat" name = "idFormat">
                <?php 
                  foreach ($format as $row)
                    {
                      ?>
                      <option value="<?php $row->idFormat;?>"><?php echo $row->formatName;?></option>
                                  
                      <?php
                    }
                  ?>
              </select>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success">Agregar</button>
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>