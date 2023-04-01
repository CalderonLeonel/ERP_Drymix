<div class="modal-header">
  <h4 class="modal-title">Nuevo Cliente</h4>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
  <form action="" id="FormRegClient" enctype="multipart/form-data">
    <div class="row">
      <div class="col-sm-3">
        <div class="form-group">
          <label for="">Codigo Cliente</label>
          <input type="text" class="form-control" id="codClient" name="codClient" placeholder="Codigo usado por la empresa">
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group">
          <label for="">Apellido Paterno</label>
          <input type="text" class="form-control" id="nameProduct" name="nameProduct" placeholder="Apellido Paterno del Cliente">
        </div>
      </div> 
      <div class="col-sm-3">
        <div class="form-group">
          <label for="">Apellido Materno</label>
          <input type="text" class="form-control" id="nameProduct" name="nameProduct" placeholder="Apellido Materno del Cliente">
        </div>
      </div> 
      <div class="col-sm-3">
        <div class="form-group">
          <label for="">Nombres(s)</label>
          <input type="text" class="form-control" id="nameProduct" name="nameProduct" placeholder="Nombre del Cliente">
        </div>
      </div> 
    </div>


    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label for="">Descripción</label>
          <input type="text" class="form-control" id="descProducto" name="descProducto">
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
        <label for="">Tipo de Producto</label>
          <select name="typeProduct" id="typeProduct" class="form-control">
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label for="">Formato de Producto</label>
          <select name="formatProduct" id="formatProduct" class="form-control">
          </select>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <label for="">Imagen</label>
          <input type="file" class="form-control" id="ImgProducto" name="ImgProducto">
        </div>
      </div>
    </div>
  </form>
</div>

<div class="modal-footer justify-content-between">
  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
  <button type="button" class="btn btn-primary" onclick="RegProducto()">Guardar</button>
</div>
