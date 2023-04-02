
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link" id="main-tab" data-bs-toggle="tab" href="<?php echo base_url('StorageManagementController/index')?>" role="tab" aria-selected="false">Panel de Inventaio</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="main-tab" data-bs-toggle="tab" href="<?php echo base_url('StorageManagementController/listItem')?>" role="tab" aria-selected="false">Lista de Items</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="material-list-tab" data-bs-toggle="tab" href="<?php echo base_url('StorageManagementController/createItem')?>" role="tab" aria-selected="false">Crear Items</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="main-tab" data-bs-toggle="tab" href="<?php echo base_url('StorageManagementController/ItemTypeList')?>" role="tab" aria-selected="false">Lista de Tipos de Items</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="material-list-tab" data-bs-toggle="tab" href="<?php echo base_url('StorageManagementController/createItemType')?>" role="tab" aria-selected="false">Crear Tipo de Item</a>
                    </li>
                  </ul>
                </div>
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                   
                    <div class="row">
                      <div class="col-lg-4 d-flex flex-column">
                          <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">                             
                                  <div class="row-lg">
                                  <div class="col-12">
                                   <h2 class="card-title card-title-dash">Registra Items</h2>
                                   <br>
                                   <br>
                                   <button type="button" class="btn btn-primary btn-rounded btn-lg text-light">Registrar Item</button>
                                  </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>   
                      </div>
                      <div class="col-lg-4 d-flex flex-column">
                          <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">                             
                                  <div class="row-lg">
                                  <div class="col-12">
                                   <h2 class="card-title card-title-dash">Registra Tipos de Items</h2>
                                   <br>
                                   <br>
                                   <button type="button" class="btn btn-primary btn-rounded btn-lg text-light">Registrar Tipos</button>
                                  </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>   
                      </div>
                      <div class="col-lg-2 d-flex flex-column">
                          <div class="col-6 col-lg-4 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">                             
                                  <div class="row-lg">
                                  <div class="col-12">
                                   <h2 class="card-title card-title-dash">Perfil</h2>
                                   <h5 class="card-subtitle card-subtitle-dash">Nombre Usuario</h5>
                                   <button type="button" class="btn btn-primary btn-rounded btn-lg text-light">Ver Perfil</button>
                                  </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>                           
                      </div>
                      <div class="col-lg-2 d-flex flex-column">
                          <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded bg-primary">
                              <div class="card-body">
                              <h4 class="card-title card-title-dash text-light">Volver a la Pagina Principal</h4>
                                <div class="d-sm-flex justify-content-between align-items-start">                             
                                  <div class="row-lg">
                                  <div class="col-12">
                                   <a href="#" class="hidden text-light stretched-link"></a>
                                  </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>   
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-4 d-flex flex-column">
                          <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">                             
                                  <div class="row-lg">
                                  <div class="col-12">
                                   <h2 class="card-title card-title-dash">Registra Stands</h2>
                                   <br>
                                   <br>
                                   <button type="button" class="btn btn-primary btn-rounded btn-lg text-light">Registrar Stands</button>
                                  </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>   
                      </div>
                      <div class="col-lg-4 d-flex flex-column">
                          <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">                             
                                  <div class="row-lg">
                                  <div class="col-12">
                                   <h2 class="card-title card-title-dash">Registra Secciones</h2>
                                   <br>
                                   <br>
                                   <button type="button" class="btn btn-primary btn-rounded btn-lg text-light">Registrar Secciones</button>
                                  </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>   
                      </div>
                      <div class="col-lg-4 d-flex flex-column">
                          <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">                             
                                  <div class="row-lg">
                                  <div class="col-12">
                                   <h2 class="card-title card-title-dash">Registra Almacenes</h2>
                                   <br>
                                   <br>
                                   <button type="button" class="btn btn-primary btn-rounded btn-lg text-light">Registrar Almacenes</button>
                                  </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>   
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                    <h4 class="card-title card-title-dash">Lista de Items</h4>
                                  </div>
                                  <div>
                                    <button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i class="mdi mdi-playlist-plus"></i>Ver Lista Completa</button>
                                  </div>
                                </div>
                                <div class="table-responsive  mt-1">
                                  <table class="table select-table">
                                    <thead>
                                      <tr>                                     
                                        <th>ID</th>
                                        <th>Item</th>                                       
                                      </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($table1 as $data):?>
                                      <tr>
                                        <td>
                                          <h6><?php echo $row['idItem'];?></h6>
                                        </td>
                                        <td>
                                          <h6><?php echo $row['itemName'];?></h6>                                        
                                        </td>
                                      </tr>
                                      <?php endforeach;?>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>                    
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                    <h4 class="card-title card-title-dash">Lista de Tipos de Items</h4>
                                  </div>
                                  <div>
                                    <button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i class="mdi mdi-playlist-plus"></i>Ver Lista Completa</button>
                                  </div>
                                </div>
                                <div class="table-responsive  mt-1">
                                  <table class="table select-table">
                                    <thead>
                                      <tr>                                     
                                        <th>ID</th>
                                        <th>Tipo de Items</th>                                       
                                      </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($table2 as $data):?>
                                        <td>
                                          <h6><?php echo $row['idItemType'];?></h6>
                                        </td>
                                        <td>
                                          <h6><?php echo $row['itemTypeName'];?></h6>                                        
                                        </td>
                                      </tr>
                                      <?php endforeach;?>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>                    
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
