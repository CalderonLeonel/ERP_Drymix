<div class="content-wrapper">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Nuevo Movimiento</h4>
            <div class="row">
                <div class="col-12">
                    <form class="forms-sample" method="POST" id="formNewMovement" name="formNewMovement" action="<?php echo base_url('MovementsController/InsertMovement') ?>">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Nombre del Producto</label>
                            <input type="text" class="form-control" id="productName" name="productName" value="">
                        </div>
                        <div class="form-group">
                            <label for="FabricaAlmacen">Fabrica/Almacen</label>
                            <select class="form-control" id="almFab" name="almFab">
                                <option value="Almacen">Almacen</option>
                                <option value="Fabrica">Fabrica</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="typeMovement">Tipo de Movimiento</label>
                            <select class="form-control" id="typeMovement" name="typeMovement">
                                <option value="Ingreso">Ingreso</option>
                                <option value="Salida">Salida</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Quantity">Cantidad</label>
                            <input type="text" class="form-control" id="quantity" name="quantity" value="">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Realizar Movimiento</button>
                            <button type="button" class="btn btn-light">Volver</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>