<?=$header?>
<div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Formulario de Empleado</h4>
                  <form class="forms-sample" method="POST" action="<?php echo site_url('UserController/insertEmployee')?>">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Nombres</label>
                      <input type="text" class="form-control" name="txtName" placeholder="Nombres">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Primer Apellido</label>
                      <input type="text" class="form-control" name="txtSurname1" placeholder="Primer Apellido">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Segundo Apellido</label>
                      <input type="text" class="form-control" name="txtSurname2" placeholder="Segundo Apellido">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Email</label>
                      <input type="text" class="form-control" name="txtEmail" placeholder="Email">
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Fecha de Nacimiento</label>
                          <div class="col-sm-9">
                            <input class="form-control" placeholder="dd/mm/yyyy" name="txtBirthday">
                          </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Codigo de Empleado</label>
                      <input type="text" class="form-control" name="txtEmployeeCode" placeholder="codigo">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">CI</label>
                      <input type="text" class="form-control" name="txtCI" placeholder="Carnet de Identidad">
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Crear</button>
                    <button class="btn btn-light">Cancel</button>

                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Formulario de Usuario</h4>
                  <form class="forms-sample" method="POST" action="<?php echo site_url('UserController/insertUser')?>">
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nombre de Usuario</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="txtUsername" placeholder="Nombre de Usuario">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Contraseña</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" name="txtPassword1" placeholder="Contraseña">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Confirmar Contraseña</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" name="txtPassword2" placeholder="Confirmar Contraseña">
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Crear Usuario</button>
                    <button class="btn btn-light">Cancelar</button>
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>
        <?=$footer?>