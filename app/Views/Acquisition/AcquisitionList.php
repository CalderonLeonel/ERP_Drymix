<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Drymix</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/vendors/feather/feather.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>/images/favicon.png" />
</head>
<body>
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
                      <div class="col-lg-12 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                    <h4 class="card-title card-title-dash">Listado de Adquisiciones</h4>
                                    <p class="card-subtitle card-subtitle-dash">Tiene 3 adquisiciones <span class="text-success">completadas</span></p>
                                    <p class="card-subtitle card-subtitle-dash">Tiene 5 adquisiciones <span class="text-warning">en curso</span></p>
                                    <p class="card-subtitle card-subtitle-dash">Tiene 2 adquisiciones <span class="text-primary">pendientes</span></p>
                                    <p class="card-subtitle card-subtitle-dash">Tiene 2 adquisiciones <span class="text-danger">canceladas</span></p>
                                  </div>
                                </div>
                                <div class="table-responsive  mt-1">
                                  <table class="table select-table">
                                    <thead>
                                      <tr>
                                        <th>Id</th>
                                        <th>Proveedor</th>
                                        <th>Nombre de Solicitud</th>
                                        <th>Fecha</th>
                                        <th>Estado</th>
                                        <th>Estado</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($table as $data):?>
                                      <tr>
                                     
                                        <td>
                                          <h5><?= $data['idAdquisitionQuote'];?></h5> 
                                        </td>
                                        <td>
                                          <div class="d-flex">
                                            <div>
                                              <h5><?= $data['idProvider'];?></h5> 
                                              <h6>Solicitado Por: NombreUsuario</h6>                                            
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <h5><?= $data['name'];?></h5>                                         
                                        </td>
                                        <td>
                                          <h5>0/00/0000</h5> 
                                        </td>
                                        <td>
                                          <div class="badge badge-opacity-warning">EstadoDeSolicitud</div>
                                        </td>
                                        <td>
                                          <form method="post" action="<?php echo site_url('AcquisitionController/editAcquisition')?>" >
                                            <div class="form-group">
                                              <input type="hidden" name="idAdquisitionQuote" id="idAdquisitionQuote" value="<?= $data['idAdquisitionQuote'];?>">
                                              <input type="submit" class="btn btn-primary text-light" value="Editar">
                                            </div>
                                          </form>   
                                          <form method="post" action="<?php echo site_url('AcquisitionController/DeleteAcquisition')?>" >
                                            <div class="form-group">
                                            <input type="hidden" name="idAdquisitionQuote" id="idAdquisitionQuote" value="<?= $data['idAdquisitionQuote'];?>">
                                              <input type="submit" class="btn btn-danger text-light" value="Eliminar">
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
</body>
</html>