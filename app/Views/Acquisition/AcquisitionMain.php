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
                      <a class="nav-link active" id="main-tab" data-bs-toggle="tab" href="<?php echo base_url('AcquisitionController')?>" role="tab" aria-selected="true">Panel de Adquisiciones</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="main-tab" data-bs-toggle="tab" href="<?php echo base_url('AcquisitionController/list')?>" role="tab" aria-selected="false">Lista de Adquisiciones</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" id="main-tab" data-bs-toggle="tab" href="<?php echo base_url('ProviderController/list')?>" role="tab" aria-selected="false">Pagina Principal de Provedores</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="material-list-tab" data-bs-toggle="tab" href="<?php echo base_url('AcquisitionController/create')?>" role="tab" aria-selected="false">Crear Adquisicion</a>
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
                                   <h2 class="card-title card-title-dash">Ver la Lista de Proveedores</h2>
                                   <br>
                                   <br>
                                   <a href="<?php echo base_url('ProviderController/list')?>" class="btn btn-primary btn-rounded btn-lg text-light">Lista de Proveedores</a>
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
                                   <h2 class="card-title card-title-dash">Registrar adquisicion</h2>
                                   <br>
                                   <br>
                                   <a href="<?php echo base_url('AcquisitionController/create')?>" class="btn btn-success btn-rounded btn-lg text-light">Registrar adquisicion</a>
                                  </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                      <div class="col-lg-4 d-flex flex-column">
                          <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded bg-primary">
                              <div class="card-body">
                              <i class=" mdi mdi-home mdi-48px text-light"></i>
                              <h4 class="card-title card-title-dash text-light"> Volver a la Pagina Principal </h4>
                                <div class="d-sm-flex justify-content-between align-items-start">                             
                                  <div class="row-lg">
                                  <div class="col-12">
                                   <a href="<?php echo base_url('Home')?>" class="hidden text-light stretched-link"></a>
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
                                              <?php 
                                              foreach($provider as $data1):
                                              if($data['idProvider'] == $data1['idProvider']){
                                                ?> <h5><?= $data1['providerName'];?></h5> <?php
                                              }
                                              endforeach;
                                              ?>
                                              <h6>Solicitado Por: NombreUsuario</h6>                                            
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <h5><?= $data['name'];?></h5>                                         
                                        </td>
                                        <td>
                                          <h5><?= $data['createDate'];?></h5> 
                                        </td>
                                        <td>                                                                                     
                                                  <?php 
                                                    switch ( $data['quoteState']) {
                                                      case 0:
                                                        ?><h5>Cancelado</h5><?php 
                                                        break;
                                                      case 1:
                                                        ?> <h5>Pendiente</h5><?php 
                                                        break;
                                                      case 2:
                                                        ?>< <h5>En Proceso</h5><?php 
                                                        break;
                                                      case 3:
                                                        ?><h5>Completado</h5><?php 
                                                        break;
                                                      default:
                                                      ?><h5>Cancelado</h5><?php 
                                                    }                                               
                                                    ?>                                                
                                        </td>
                                        <td>
                                          <form method="post" action="<?php echo site_url('AcquisitionController/edit')?>" >
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