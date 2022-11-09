        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Productos de la Empresa</h4>
              <div class="row">
                <div class="col-12">
                <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Codigo Producto</th>
                          <th>Nombre Producto</th>
                          <th>Fecha Registro</th>
                          <th>Estado</th>
                          <td>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newProduct">Nuevo Producto</button>
                          </td>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($table as $row){
                        ?>
                       <tr>
                          <td>Jacob</td>
                          <td><p id="pName<?php echo $row->idProduct?>"></p><?php echo $row->productName?></td>
                          <td><?php echo $row->createDate;?></td>
                          <td><label class="badge badge-success">En Produccion</label></td>
                          <td>
                            <div class="btn-group">
                              <button class="btn btn-info" id="btnInfo<?php echo $row->idProduct?>" data-bs-toggle="modal" data-bs-target="#infoProduct">
                                <i class="mdi mdi-information-outline"></i>
                              </button>
                              <button class="btn btn-success" id="btnEdit<?php echo $row->idProduct?>" onclick="display('<?php echo $row->idProduct ?>')" id="btnEdit<?php echo $row->idProduct ?>">
                                <i class="mdi mdi-tooltip-edit"></i>
                              </button>
                              <button class="btn btn-danger" onclick="MDelProduct(<?php echo $row->idProduct;?>)">
                                <i class="mdi mdi-delete"></i>
                              </button>
                            </div>
                          </td>
                       </tr>
                       <?php };?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 col-md-5">
                    <div class="dataTables_info" id="order-listing_info" role="status" aria-live="polite">Showing 1 to 10 of 10 entries</div>
                  </div>
                  <div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="order-listing_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="order-listing_previous"><a href="https://www.bootstrapdash.com/demo/star-admin2-pro/template/demo/vertical-default-light/pages/tables/data-table.html#" aria-controls="order-listing" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="https://www.bootstrapdash.com/demo/star-admin2-pro/template/demo/vertical-default-light/pages/tables/data-table.html#" aria-controls="order-listing" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="order-listing_next"><a href="https://www.bootstrapdash.com/demo/star-admin2-pro/template/demo/vertical-default-light/pages/tables/data-table.html#" aria-controls="order-listing" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>




<div class="modal fade" id="newProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Producto</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  class="forms-sample" method="POST" id="formNewProduct" name="formNewProduct" action="<?php echo base_url('ProductsController/InsertProduct') ?>">
          <div class="form-group">
            <label for="exampleInputUsername1">Nombre del Producto</label>
            <input type="text" class="form-control" id="productName" name="productName" placeholder="Nombre del Producto">
          </div>
          <div class="form-group">
            <label class="col-sm-3 col-form-label">Tipo de Producto</label>
            <div class="col-sm-12">
              <select class="form-control" id="idTypes" name="idTypes">
                <?php 
                foreach ($types as $row)
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


<!--<div class="modal fade" id="editsProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <input type="text" class="form-control" id="productName" name="productName" value="<?//php echo $row->productName?>">
          </div>
          <div class="form-group">
            <label class="col-sm-3 col-form-label">Tipo de Producto</label>
            <div class="col-sm-12">
              <select class="form-control" id="idTypes" name="idTypes">
                <?php 
                foreach ($table as $row)
                  {
                    ?>
                    <option value="<?php //$row->idProductType; ?>"><?php //echo $row->productTypeName; ?></option>
                                  
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
                      <option value="<?php //$row->idFormat;?>"><?php //echo $row->formatName;?></option>
                                  
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
</div>-->