
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
                                   <h2 class="card-title card-title-dash">Adquirir Material</h2>
                                   <h5 class="card-subtitle card-subtitle-dash">Adquiera Materiales para Drymix</h5>
                                   <button type="button" class="btn btn-success btn-rounded btn-lg text-light">Hacer Una Adquisición</button>
                                  </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                      <div class="col-lg-6 d-flex flex-column">
                          <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
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
                      <div class="col-lg-12 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                    <h4 class="card-title card-title-dash">Listado de Stands</h4>
                                  </div>
                                </div>
                                <div class="table-responsive  mt-1">
                                <table class="table select-table">
                                    <thead>
                                      <tr>
                                        <th>ID</th>
                                        <th>Sección</th> 
                                        <th>Almacen</th> 
                                        <th></th>                                               
                                      </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($table as $row):?>
                                      <tr>
                                        <td>
                                          <h6><?php echo $row['idSection'];?></h6>
                                        </td>
                                        <td>
                                          <h6><?php echo $row['sectionName'];?></h6>                                        
                                        </td>
                                        <td>
                                          <h6><?php echo $row['idStorage'];?></h6>                                        
                                        </td>
                                        <td>
                                          <form method="post" action="<?php echo site_url('StorageManagementController/editSection')?>">
                                            <div class="form-group">
                                              <input type="hidden" name="idSection" id="idSection" value="<?php echo $row['idSection'];?>">
                                              <input type="submit" class="btn btn-primary" value="Editar">
                                            </div>
                                          </form>   
                                          <form method="post" action="<?php echo site_url('StorageManagementController/DeleteSection')?>">
                                            <div class="form-group">
                                            <input type="hidden" name="idSection" id="idSection"  value="<?php echo $row['idSection'];?>">
                                              <input type="submit" class="btn btn-danger" value="Eliminar">
                                            </div>
                                          </form>                                       
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
