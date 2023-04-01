<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Listado de Lineas</h1>
        </div>
        <div class="col-sm-6">

        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Listado de Lineas</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <button type="submit" class="btn btn-success" style="margin-left: 900px; margin-bottom: 5px; height: 40px; width: 100px;" onclick="MNuevaLinea()">Nuevo</button>
            <thead>
              <tr>
                <th>Codigo de la Linea</th>
                <th>Nombre de la Linea</th>
                <th>Estado</th>
                <th>Fecha Registro</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($table as $row) {
              ?>
                <tr>
                  <td><?php //echo $row->lineCode ?></td>
                  <td><?php echo $row->lineName ?></td>
                  <td><?php echo $row->state ?></td>
                  <td><?php echo $row->createDate ?></td>
                  <td>

                    <div class="btn-group">
                      <input type="hidden" name="idLine" id="idLine">
                      <button class="btn btn-info" id="btnInfo" onclick="MVerLinea(<?php echo $row->idLine ?>)">
                        <i class="fas fa-eye"></i>
                      </button>

                      <input type="hidden" name="idLine" id="idLine">
                      <button class='btn btn-secondary' onclick='MEditLine(<?php echo $row->idLine ?>)'>
                        <i class='fa fa-edit'></i>
                      </button>

                      <input type="hidden" name="idLine" id="idLine">
                      <button class="btn btn-danger" onclick='MDelLine(<?php echo $row->idLine; ?>)'>
                        <i class="fas fa-trash"></i>
                      </button>

                    </div>
                  </td>
                </tr>
              <?php }; ?>
            </tbody>
            <tfoot>
              <tr>
                <th>Codigo Linea</th>
                <th>Nombre de la Linea</th>
                <th>Estado</th>
                <th>Fecha Registro</th>
                <th>Acciones</th>
              </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </section>
  <!-- /.content -->