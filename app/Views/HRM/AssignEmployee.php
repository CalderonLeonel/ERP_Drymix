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
                      <a class="nav-link" id="main-tab" data-bs-toggle="tab" href="<?php echo base_url('ChargeController/list')?>" role="tab" aria-selected="false">Lista de Cargos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" id="main-tab" data-bs-toggle="tab" href="<?php echo base_url('EmployeeController/index')?>" role="tab" aria-selected="true">Asignacion de Cargos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="material-list-tab" data-bs-toggle="tab" href="<?php echo base_url('ChargeController/create')?>" role="tab" aria-selected="false">Crear Cargos</a>
                    </li>           
                  </ul>
                </div>
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">              
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
                                        <th>Empleado</th>
                                        <th>Cargo</th>
                                        <th>Departamento</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($table as $data):?>
                                      <tr>
                                     
                                        <td>
                                          <h5><?= $data['idEmployee'];?></h5> 
                                        </td>
                                        <td>
                                          <h5><?= $data['name']." ".$data['secondSurname']." ".$data['surname']?></h5> 
                                        </td>
                                        <td>
                                          <div class="d-flex">
                                            <div>
                                            <form method="post" action="<?php echo site_url('EmployeeController/UpdateEmployeeCharge')?>" >
                                                  <div class="form-group">
                                                  <input type="hidden" name="idEmployee" id="idEmployee" value="<?= $data['idEmployee'];?>">
                                                  <select class="form-control" name="stateSelect" id="stateSelect">
                                                  <?php 
                                                    foreach($charges as $data1):
                                                   if($data['idCharge'] == $data1['idCharge']){
                                                    ?> <option value="<?php echo $data1['idCharge']?>" selected disabled><?= $data1['chargeName'];?></option> <?php
                                                  }
                                                    endforeach;
                                                  foreach($charges as $data1):
                                                      ?> <option value="<?php echo $data1['idCharge']?>"><?= $data1['chargeName'];?></option> <?php
                                                    endforeach;
                                                    ?>
                                                    
                                                  </select>
                                                  </div>
                                                  <input type="submit" class="btn btn-primary text-light" value="Cambiar Cargo">
                                                </form>                                    
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="d-flex">
                                            <div>
                                            <?php 
                                            foreach($departments as $data2):
                                            if($data['idArea'] == $data2['idDepartment']){
                                              ?> <h5><?= $data2['departmentName'];?></h5> <?php
                                            }
                                            endforeach;
                                            ?>                                      
                                            </div>
                                          </div>
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