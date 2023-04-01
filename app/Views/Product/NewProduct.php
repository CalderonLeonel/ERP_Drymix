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
          <label for="">Nombre Producto</label>
          <input type="text" class="form-control" id="nameProduct" name="nameProduct" placeholder="Nombre usado por la empresa">
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
          <?php foreach( $types as $row) 
          {
          ?>
            <option value="<?php $row['idType']?>"><?php $row['typeName'];?></option>
          <?php
          }
          ?>
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label for="">Formato de Producto</label>
          <select name="formatProduct" id="formatProduct" class="form-control">
          <?php foreach( $format as $row) 
          {
          ?>
            <option value="<?php $row['idFormat']?>"><?php $row['formatName'];?></option>
          <?php
          }
          ?>
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
