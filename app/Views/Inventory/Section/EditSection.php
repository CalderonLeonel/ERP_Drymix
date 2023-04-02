
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
                      <div class="col-lg-8 d-flex flex-column">
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
                      <div class="col-lg-4 d-flex flex-column">
                          <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded bg-info">
                              <div class="card-body">
                              <h4 class="card-title card-title-dash text-light">Volver a la Pagina Principal de Inventario</h4>
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
                      <div class="col-lg-10 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <h2 class="card-title">Registrar una Sección</h2>
                                <p class="card-description"> Edite una Seccion para Guardar Items</p>
                                <form class="forms-sample" method="POST" action="<?php echo site_url('StorageManagementController/UpdateSection')?>">
                                <?php foreach($table as $row):?>
                                  <input type="hidden" name="idSection" value="<?php echo $row['idSection'];?>">
                                  <div class="form-group">
                                   <label for="inputStorageName">Nombre De Sección</label>
                                   <input type="text" class="form-control" id="sectionName" name="sectionName" value="<?php echo $row['sectionName'];?>" placeholder="Nombre de la Seccion">
                                  </div>
                                  <!--<input type="hidden" name="idStorage" value="<?php echo $row['idStorage'];?>">-->
                                 <div class="form-group">
                                       <label for="idStorage">Almacen</label>
                                       <select class="form-control" id="idStorage" name="idStorage">
                                       <?php foreach ($list1 as $row1)
                                       {
                                        ?>
                                        <option value="<?php echo $row1['idStorage'];?>"><?php echo $row1['storageName'];?></option>                                
                                       <?php
                                       }
                                       ?>
                                     </select>
                                  </div>
                                  <div class="form-group">
                                     <button type="submit" class="btn btn-lg btn-primary text-light">Modificar Sección</button>
                                  </div>
                                  <?php endforeach;?>
                                </form>
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
