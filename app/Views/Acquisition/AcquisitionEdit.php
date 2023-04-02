
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link" id="main-tab" data-bs-toggle="tab" href="#" role="tab" aria-selected="false">Adquisciones</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="material-list-tab" data-bs-toggle="tab" href="#" role="tab" aria-selected="false">Lista de Materiales</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="provider-list-tab" data-bs-toggle="tab" href="#" role="tab" aria-selected="false">Lista de Proveedores</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="material-list-tab" data-bs-toggle="tab" href="#" role="tab" aria-selected="false">Registro de Adquisiciones</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="material-list-tab" data-bs-toggle="tab" href="#" role="tab" aria-selected="false">Solicitud de Adquisiciones</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="material-list-tab" data-bs-toggle="tab" href="#" role="tab" aria-selected="false">Lista de Solicitudes</a>
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
                              <h4 class="card-title card-title-dash text-light">Volver a la Pagina Principal de Adquisiciones</h4>
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
                                <h2 class="card-title">Modificar una adquisición</h2>
                                <p class="card-description"> Modifique una adquisición</p>
                                <form lass="forms-sample" method="post" action="<?php echo site_url('AcquisitionController/InsertAcquisition')?>">
                                  <div class="form-group">
                                  <?php foreach($data as $row):?>
                                    <div class="form-group">
                                    <input id="idAcquisitionQuote" class="form-control" type="hidden" name="idAcquisitionQuote" value="<?= $data['idAcquisitionQuote'];?>">
                                  </div>
                                   <label for="name">Nombre Adquisición</label>
                                   <input type="text" class="form-control" id="name" name="name" value="<?= $data['idProvider'];?>" placeholder="Nombre Adquisición">
                                  </div>
                                  <div class="form-group">
                                    
                                       <label for="providerSelect" >Proveedor</label>
                                       <select class="form-control"  id="providerSelect" name="providerSelect">
                                       <?php foreach ($list as $row)
                                       {
                                        ?>
                                        <option value="<?php $row['idProvider']?>"><?php echo $row['providerName'];?></option>                                
                                       <?php
                                       }
                                       ?>
                                       </select>
                                  </div>
                                  <div class="form-group">
                                     <button type="submit" class="btn btn-lg btn-primary text-light">Modificar Adquisión</button>
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
        <!-- content-wrapper ends -->
