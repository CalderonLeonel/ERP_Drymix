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
                  | <li class="nav-item">
                      <a class="nav-link active" id="main-tab" data-bs-toggle="tab" href="<?php echo base_url('ChargeController/list')?>" role="tab" aria-selected="true">Lista de Cargos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="main-tab" data-bs-toggle="tab" href="<?php echo base_url('EmployeeController/index')?>" role="tab" aria-selected="false">Asignacion de Cargos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " id="material-list-tab" data-bs-toggle="tab" href="<?php echo base_url('ChargeController/create')?>" role="tab" aria-selected="false">Crear Cargos</a>
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
                                   <h2 class="card-title card-title-dash">Asignar Empleados</h2>
                                   <br>
                                   <br>
                                   <a href="<?php echo base_url('EmployeeController/index')?>" class="btn btn-success btn-rounded btn-lg text-light">Pagina de Asignacion de Cargos</a>
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
                                   <h2 class="card-title card-title-dash">Lista completa de cargos</h2>
                                   <br>
                                   <br>
                                   <a href="<?php echo base_url('ChargeController/list')?>" class="btn btn-primary btn-rounded btn-lg text-light">Lista de cargos</a>
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
                      <div class="col-lg-10 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <h2 class="card-title">Modificar un Cargo</h2>
                                <p class="card-description"> Modifique un Cargo para los empleados de un departamento</p>
                                <form class="forms-sample" method="POST" action="<?php echo site_url('StorageManagementController/UpdateItem')?>">
                                <?php foreach($table as $row):?>
                                  <div class="form-group">
                                  <input type="hidden" name="idItem" name="idItem" value="<?php echo $row['idItem'];?>">
                                   <label for="chargeName">Nombre De Cargo</label>
                                   <input type="text" class="form-control" id="chargeName" value="<?php echo $row['chargeName'];?>" placeholder="Nombre de Cargo">
                                  </div>
                                  <div class="form-group">
                                       <label for="itemTypeSelect">Tipo de Cargo</label>
                                       <select class="form-control"  name="idCharge" id="idCharge">
                                       <?php foreach ($list as $row1)
                                       {
                                        ?>
                                        <option value="<?php $row1['idCharge']?>"><?php echo $row1['chargeName'];?></option>                                
                                       <?php
                                       }
                                       ?>
                                       </select>
                                  </div> 
                                  <div class="form-group">
                                     <button type="submit" class="btn btn-lg btn-primary text-light">Modificar Cargo</button>
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
      </body>
</html>