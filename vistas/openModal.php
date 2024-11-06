<div class="modal fade" id="openModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <center><h4 class="modal-title">Agregar Contacto</h4></center>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="vistas/agregar.php" method="post" id="FormAgregar">
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label">Nombre:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nombreContacto">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label">Telefono:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="tel" class="form-control" name="telefonoContacto">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label">Correo:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="correoContacto">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label">Dirección:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="direccionContacto">
                            </div>
                        </div>

                     <div class="modal-footer">
                        <button class="btn btn-primary" type="submit" name="guardar"><i class="fa fa-save"></i> Guardar</button> 
                        <button class="btn btn-danger" type="button" data-dismiss="modal" onclick="ResetearFormulario()"><i class="fa fa-times"></i> Resetar</button></button>
                     </div>

                    </form>
                </div>
            </div>
        </div>
       
    </div>
</div>

<script src="vistas/js/scripts.js"></script>