
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
                                <h2 class="card-title">Modificar un Item</h2>
                                <p class="card-description"> Modifique un Item que requiera un cambio de stand, seccion o almacen</p>
                                <form class="forms-sample" method="POST" action="<?php echo site_url('StorageManagementController/UpdateItem')?>">
                                <?php foreach($table as $row):?>
                                  <div class="form-group">
                                  <input type="hidden" name="idItem" name="idItem" value="<?php echo $row['idItem'];?>">
                                   <label for="itemName">Nombre De Item</label>
                                   <input type="text" class="form-control" id="itemName" value="<?php echo $row['itemName'];?>" placeholder="Nombre Item">
                                  </div>
                                  <div class="form-group">
                                       <label for="itemTypeSelect">Tipo de Item</label>
                                       <select class="form-control"  name="idItemType" id="idItemType">
                                       <?php foreach ($list as $row1)
                                       {
                                        ?>
                                        <option value="<?php $row1['idItemType']?>"><?php echo $row1['itemTypeName'];?></option>                                
                                       <?php
                                       }
                                       ?>
                                       </select>
                                  </div>
                                  <!-- <div class="form-group">
                                       <label for="itemTypeSelect">Tipo de Item</label>
                                       <select class="form-control" name="" id="itemTypeSelect">
                                       <option>tipo1</option>
                                       <option>tipo2</option>
                                       <option>tipo3</option>
                                     </select>
                                  </div>
                                  <div class="form-group">
                                       <label for="storageSelect">Almacen</label>
                                       <select class="form-control" name="" id="storageSelect">
                                       <option>storage1</option>
                                       <option>storage2</option>
                                       <option>storage3</option>
                                     </select>
                                  </div>
                                  <div class="form-group">
                                       <label for="sectionSelect">Seccion</label>
                                       <select class="form-control" id="sectionSelect">
                                       <option>section1</option>
                                       <option>section2</option>
                                       <option>ssection3</option>
                                     </select>
                                  </div>
                                  <div class="form-group">
                                       <label for="standSelect">Stand</label>
                                       <select class="form-control" id="standSelect">
                                       <option>stand1</option>
                                       <option>stand2</option>
                                       <option>stand3</option>
                                     </select>
                                  </div>
                                  <div class="form-group">
                                       <label for="unitInput">Cantidad Ingresada</label>
                                      <input type="number" class="form-control"  id="unitInput" placeholder="Cantidad Ingresada">
                                  </div>-->       
                                  <div class="form-group">
                                     <button type="submit" class="btn btn-lg btn-primary text-light">Modificar Item</button>
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
