<div wire:ignore.self id="modalCreate" class="modal fade bd-example-modal-form" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" >
                <h5 class="modal-title" id="exampleModalform">DATOS DE USUARIO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="field-1" class="control-label">Nombre</label>
                            <input type="text" wire:model.defer="nombre" class="form-control"  required>
                            @error('nombre') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="field-1" class="control-label">Nit</label>
                            <input type="text" wire:model.defer="nit" class="form-control"  required>
                            @error('nit') <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>               
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="field-1" class="control-label">Teléfono</label>
                            <input type="number" wire:model.defer="telefono" class="form-control"  >                           
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="field-1" class="control-label">Dirección</label>
                            <input type="text" wire:model.defer="direccion" class="form-control"  >                           
                        </div>
                    </div>
                </div>               
                <div class="row">                    
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-1" class="control-label">Correo</label>
                            <input type="email" wire:model.defer="correo" class="form-control"  >   
                            @error('correo') <span class="text-danger error">{{ $message }}</span>@enderror                        
                        </div>
                    </div>
                </div>  +
                <div class="row">       
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="field-1" class="control-label">Usuario</label>
                        <input type="text" wire:model="usuario" class="form-control"  required>
                        @error('usuario') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="field-1" class="control-label">Contraseña</label>
                        <input type="password" wire:model="password" class="form-control"  required>
                        @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div>
                </div>
                <div class="row">                    
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-1" class="control-label">Tipo</label>
                            <select class="form-control" wire:model="tipo">
                                <option value="">SELECCIONE</option>
                                <option value="1">ADMINISTRADOR</option>
                                <option value="2">REGULAR</option>
                            </select>    
                            @error('tipo') <span class="text-danger error">{{ $message }}</span>@enderror                      
                        </div>
                    </div>
                </div>  

            </div>
            <div class="modal-footer">                
                <button type="button" wire:click="store" class="btn btn-raised btn-primary ml-2"><i class="mdi mdi-content-save-all">
                </i> GUARDAR</button>                
                <button type="button" class="btn btn-raised btn-danger ml-2" data-dismiss="modal"><i class="mdi mdi-close-octagon
                    "></i> CANCELAR</button>
            </div>
        </div>
    </div>
</div>
