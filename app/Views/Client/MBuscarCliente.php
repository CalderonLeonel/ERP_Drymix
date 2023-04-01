<div class="modal-header">
    <h4 class="modal-title">Buscar Cliente</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Listado de Clientes</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Codigo del Cliente</th>
                                <th>Nombre del Cliente</th>
                                <th>Estado</th>
                                <th>Fecha Registro</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($table as $row) {
                            ?>
                                <tr>
                                    <td><?php //echo $row->productCode 
                                        ?></td>
                                    <td><?php echo $row->fullname ?></td>
                                    <td><?php echo $row->state ?></td>
                                    <td><?php echo $row->createDate ?></td>
                                    <td>

                                        <div class="btn-group">

                                            <input type="hidden" name="idClient" id="idClient">
                                            <button class="btn btn-outline-secondary " type="button" onclick="busCliente(<?php echo $row->idClient; ?>)">
                                                <i class="fas fa-check"></i>
                                            </button>

                                        </div>
                                    </td>
                                </tr>
                            <?php }; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Codigo Cliente</th>
                                <th>Nombre Cliente</th>
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
</div>

<div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
</div>