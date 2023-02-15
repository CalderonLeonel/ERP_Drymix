<div class="content-wrapper">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Editar Producto</h4>
        <div class="row">
          <div class="col-12">
          <form class="forms-sample" method="POST" id="formEditProduct" name="formEditProduct" action="<?php echo base_url('ProductsController/UpdateProduct') ?>">        
            <?php 
            foreach($table as $row)
            {
            ?>
            <div class="form-group">
              <label for="exampleInputUsername1">Nombre del Producto</label>
              <input type="text" class="form-control" id="productName" name="productName" value="<?php echo $row->productName?>">
            </div>
            <div class="form-group">
              <label class="col-sm-3 col-form-label">Tipo de Producto</label>
              <div class="col-sm-12">
                <select class="form-control" id="idTypes" name="idTypes">
                <?php
                foreach($types as $row){
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
                    foreach($format as $row){
                  ?>
                    <option value="<?php $row->idFormat;?>"><?php echo $row->formatName;?></option>
                  <?php
                    }
                  ?>
                </select>
              </div>
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