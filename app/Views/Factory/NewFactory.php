<div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nueva Fabrica</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form  class="forms-sample" method="POST" id="formNewFactory" name="formNewFactory" action="<?php echo base_url('FactoryController/InsertFactory') ?>">
          <div class="form-group">
            <label for="factoryName">Nombre de la Fabrica</label>
            <input type="text" class="form-control" id="factoryName" name="factoryName" placeholder="Nombre de la Fabrica">
          </div>
          <div class="form-group">
            <label for="factoryAddress">Direccion de la Fabrica</label>
            <input type="text" class="form-control" id="factoryAddress" name="factoryAddress" placeholder="Direccion de la Fabrica">
          </div>
        </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Agregar</button>
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
      </div>
      </form>
      </div>