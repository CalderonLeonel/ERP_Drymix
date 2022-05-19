<?=$header?>
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Usuarios</h4>
                  <div class="row grid-margin">
                    <div class="col-12">
                   <!--   <div class="alert alert-warning" role="alert">
                          <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                      </div>
-->
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <div class="table-responsive">
                        <table id="order-listing" class="table">
                          <thead>
                            <tr class="bg-primary text-white">
                                <th>Usuario</th>
                                <th>Estado</th>
                                <th>Creado el:</th>
                                <th>Ultimo cambio:</th>
                                <th>Acciones:</th>
                            </tr>
                          </thead>
                          <tbody>
<!--
                            <tr>
                                <td>WD-61</td>
                                <td>Edinburgh</td>
                                <td>New York</td>
                                <td>$1500</td>
                                <td>$3200</td>
                                <td>
                                  <label class="badge badge-info">On hold</label>
                                </td>
                                <td class="text-right">
                                  <button class="btn btn-light">
                                    <i class="ti-eye text-primary"></i>View
                                  </button>
                                  <button class="btn btn-light">
                                    <i class="ti-close text-danger"></i>Remove
                                  </button>
                                </td>
                            </tr>
-->
                            <?php
                            foreach($users as $user):
                            ?>
                            <tr>
                                <td><?=$user['userName'];?></td>
                                <?php
                                if($user['state'] == '1')
                                {
                                  ?>
                                <td>
                                  <label class="badge badge-info">Habilitado</label>
                                </td> 
                                <?php
                                }else{
                                  ?>
                                <td>
                                  <label class="badge badge-danger">Inhabilitado</label>
                                </td> 
                                  <?php
                                };
                                ?>
                        
                                <td><?=$user['createDate'];?></td>
                                <td><?=$user['updateDate'];?></td>
                                
                                <td class="text-right">
                                  <button class="btn btn-light">
                                    <i class="ti-eye text-primary"></i> Ver
                                  </button>
                                  <button class="btn btn-light">
                                    <i class="ti-close text-danger"></i> Inhabilitar
                                  </button>
                                </td>
                            </tr>
                            <?php
                            endforeach;
                            ?>
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
        <!-- content-wrapper ends -->
        <?=$footer?>