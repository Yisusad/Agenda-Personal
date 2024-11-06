<!-- Editar Contacto Modal -->
<div class="modal fade" id="edit_<?php echo $value['idPersona']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <center><h4 class="modal-title">Editar Contacto</h4></center>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="vistas/editar.php?id=<?php echo $value['idPersona']; ?>" method="post">
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label">Nombre:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nombreContacto" value="<?php echo $value['Nombre']; ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label">Telefono:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="tel" class="form-control" name="telefonoContacto" value="<?php echo $value['Telefono']; ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label">Correo:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="correoContacto" value="<?php echo $value['Correo']; ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label">Dirección:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="direccionContacto" value="<?php echo $value['Direccion']; ?>">
                            </div>
                        </div>

                     <div class="modal-footer">
                        <button class="btn btn-success" type="submit" name="editar"><i class="fa fa-check"></i> Actualizar</button> 
                        <button class="btn btn-danger" type="button" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button></button>
                     </div>

                    </form>
                </div>
            </div>
        </div>
       
    </div>
</div>

<!-- Eliminar Contacto Modal -->

<div class="modal fade" id="delete_<?php echo $value['idPersona']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <center><h4 class="modal-title">Borrar Contacto</h4></center>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="vistas/editar.php?id=<?php echo $value['idPersona']; ?>" method="post">
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label">Nombre:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nombreContacto" value="<?php echo $value['Nombre']; ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label">Telefono:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="tel" class="form-control" name="telefonoContacto" value="<?php echo $value['Telefono']; ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label">Correo:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="correoContacto" value="<?php echo $value['Correo']; ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label">Dirección:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="direccionContacto" value="<?php echo $value['Direccion']; ?>">
                            </div>
                        </div>

                     <div class="modal-footer">
                        <button class="btn btn-success" type="submit" name="editar"><i class="fa fa-check"></i> Actualizar</button> 
                        <button class="btn btn-danger" type="button" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button></button>
                     </div>

                    </form>
                </div>
            </div>
        </div>
       
    </div>
</div>