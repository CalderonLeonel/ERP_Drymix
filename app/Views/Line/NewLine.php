<div class="modal-header">
  <h4 class="modal-title">Nueva Linea</h4>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
  <form action="" id="FormRegLine" enctype="multipart/form-data" method="post">
    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label for="">Codigo Linea</label>
          <input type="text" class="form-control" id="codLine" name="codLine" placeholder="Codigo usado por la empresa">
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <label for="">Nombre Linea</label>
          <input type="text" class="form-control" id="lineName" name="lineName" placeholder="Nombre usado por la empresa">
        </div>
      </div>
    </div>
    <div class="modal-footer justify-content-between">
      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      <button type="button" class="btn btn-primary" onclick="RegLine()">Guardar</button>
    </div>
  </form>
</div>