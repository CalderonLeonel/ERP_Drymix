<div class="modal-header">
  <h4 class="modal-title">Nuevo Producto</h4>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
  <form action="" id="FormRegProducto" enctype="multipart/form-data">
    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label for="">Codigo Producto</label>
          <input type="text" class="form-control" id="codProducto" name="codProducto" placeholder="Codigo usado por la empresa">
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <label for="">Codigo Producto SIN</label>
          <input type="text" class="form-control" id="codProductoSin" name="codProductoSin" placeholder="Codigo usado por SIN">
        </div>
      </div> ++
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
          <label for="">Precio</label>
          <input type="text" class="form-control" id="precioProducto" name="precioProducto">

        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label for="">Unidad de medida</label>
          <input type="text" class="form-control" id="UMProducto" name="UMProducto" placeholder="Unidad de medida usada por la empresa">
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <label for="">Unidad Medida SIN</label>
          <input type="number" class="form-control" id="UMProductoSin" name="UMProductoSin" placeholder="Codigo de unidad de medida usada por SIN">
        </div>
      </div>
    </div>
    
    <div class="row">
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
