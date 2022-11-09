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
                            <button class="btn btn-primary" onclick="MNewType()">Nuevo Tipo</button>
                          </td>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($table as $row){
                        ?>
                       <tr>
                          <td>Jacob</td>
                          <td><?php echo $row->productTypeName?></td>
                          <td><?php echo $row->createDate;?></td>
                          <td><label class="badge badge-success">En Produccion</label></td>
                          <td>
                            <div class="btn-group">
                              <button class="btn btn-info" onclick="MVerProducto(<?php echo $row->idProductType;?>)">
                                <i class="mdi mdi-information-outline"></i>
                              </button>
                              <button class="btn btn-secondary" onclick="MEditProducto(<?php echo $row->idProductType;?>)">
                                <i class="mdi mdi-tooltip-edit"></i>
                              </button>
                              <button class="btn btn-danger" onclick="MEliProducto(<?php echo $row->idProductType;?>)">
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
        <!-- content-wrapper ends -->