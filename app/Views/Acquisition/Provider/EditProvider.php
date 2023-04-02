
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link" id="main-tab" data-bs-toggle="tab" href="#" role="tab" aria-selected="false">Panel de Proveedores</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="main-tab" data-bs-toggle="tab" href="#" role="tab" aria-selected="false">Lista de Proveedores</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="material-list-tab" data-bs-toggle="tab" href="#" role="tab" aria-selected="false">Crear Proveedor</a>
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
                                <h2 class="card-title">Editar un Proveedor</h2>
                                <p class="card-description"> Modifique la informacion de un proveedor para solicitar adquisiciones</p>
                                <form class="forms-sample" method="post" action="<?php echo site_url('ProviderController/UpdateProvider')?>">
                                <?php foreach($table as $data):?>
                                  <div class="form-group">
                                    <input id="idProvider" class="form-control" type="hidden" name="idProvider" value="<?= $data['idProvider'];?>">
                                  </div>
                                  <div class="form-group">
                                   <label for="providerName">Nombre Del Proveedor</label>
                                   <input type="text" class="form-control" id="providerName" name="providerName" value="<?= $data['providerName'];?>" placeholder="Nombre Proveedor">
                                  </div>
                                  <div class="form-group">
                                   <label for="contact">Contacto del Proveedor</label>
                                   <input type="number" class="form-control" id="contact" name="contact" value="<?= $data['contact'];?>" min="60000000" max="79999999" placeholder="Contacto del Proveedor">
                                  </div>
                                  <div class="form-group">
                                     <button type="submit" class="btn btn-lg btn-primary text-light">Modificar Proveedor</button>
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
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
