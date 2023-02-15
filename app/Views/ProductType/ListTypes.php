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
                          <th>Codigo Tipo Producto</th>
                          <th>Nombre Tipo Producto</th>
                          <th>Fecha Registro</th>
                          <th>Estado</th>
                          <td>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newType">Nuevo Tipo</button>
                          </td>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($table as $row) {
                        ?>
                          <tr>
                            <td>Jacob</td>
                            <td><?php echo $row->productTypeName ?></td>
                            <td><?php echo $row->createDate; ?></td>
                            <td><label class="badge badge-success">En Produccion</label></td>
                            <td>
                              <div class="btn-group">
                                <button class="btn btn-info" onclick="MVerProducto(<?php echo $row->idProductType; ?>)">
                                  <i class="mdi mdi-information-outline"></i>
                                </button>
                                <button class="btn btn-secondary" onclick="MEditProducto(<?php echo $row->idProductType; ?>)">
                                  <i class="mdi mdi-tooltip-edit"></i>
                                </button>
                                <button class="btn btn-danger" onclick="MEliProducto(<?php echo $row->idProductType; ?>)">
                                  <i class="mdi mdi-delete"></i>
                                </button>
                              </div>
                            </td>
                          </tr>
                        <?php }; ?>
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
            <div class="col-sm-12 col-md-7">
              <div class="dataTables_paginate paging_simple_numbers" id="order-listing_paginate">
                <ul class="pagination">
                  <li class="paginate_button page-item previous disabled" id="order-listing_previous"><a href="https://www.bootstrapdash.com/demo/star-admin2-pro/template/demo/vertical-default-light/pages/tables/data-table.html#" aria-controls="order-listing" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                  <li class="paginate_button page-item active"><a href="https://www.bootstrapdash.com/demo/star-admin2-pro/template/demo/vertical-default-light/pages/tables/data-table.html#" aria-controls="order-listing" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                  <li class="paginate_button page-item next disabled" id="order-listing_next"><a href="https://www.bootstrapdash.com/demo/star-admin2-pro/template/demo/vertical-default-light/pages/tables/data-table.html#" aria-controls="order-listing" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <div class="modal fade" id="newType" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo Tipo de Producto</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form class="forms-sample" method="POST" id="formNewType" name="formNewType" action="<?php echo base_url('ProductTypeController/InsertProductType') ?>">
                  <div class="form-group">
                    <label for="exampleInputUsername1">Nombre del Tipo de Producto</label>
                    <input type="text" class="form-control" id="productTypeName" name="productTypeName" placeholder="Nombre del Tipo de Producto">
                  </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-success">Agregar</button>
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
              </div>
              </form>
            </div>
          </div>
        </div>