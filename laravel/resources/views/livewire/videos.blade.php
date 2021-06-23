<div>
    @if (session()->has('message'))
        <script>
            mensaje("{{ session('message') }}")
        </script>
    @endif

    <div class="row">
        <div class="col-lg-12">
           <div class="main-title">
              <h6>SUBIDA DE VIDEOS</h6>
           </div>
        </div>

     </div>
     <hr>
     <div class="row">
        <div class="col-lg-12">
           <div class="osahan-form">
              <div class="row">
                 <div class="col-lg-12">
                    <div class="form-group">
                       <label for="e1">Titulo</label>
                       <input type="text"  class="form-control" wire:model.defer="titulo">
                       @error('titulo') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                 </div>
                 <div class="col-lg-12">
                    <div class="form-group">
                       <label for="e2">Descripción</label>
                       <textarea rows="3" id="e2" name="e2" class="form-control" wire:model.defer="descripcion"></textarea>
                       @error('descripcion') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                 </div>
              </div>              
              <div class="row">
                 <div class="col-lg-12">
                    <div class="form-group">
                       <label for="e7">URL Video</label>
                       <input type="text" placeholder="URL" wire:model="ruta" class="form-control">
                       @error('ruta') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                 </div>
              </div>
              <div class="row ">
                 <div class="col-lg-12">
                    <div class="main-title">
                       <h6>Categorias</h6>
                    </div>
                 </div>
              </div>
              <div class="row category-checkbox">
                 <!-- checkbox 1col -->
                 @foreach ($categorias as $index => $item)
                 <div class="col-lg-2 col-xs-6 col-4">
                    <div class="custom-control custom-checkbox">
                     <label ><input wire:model="opciones.{{ $index }}" value="{{ $item->id }}"
                        type="checkbox"> {{ $item->nombre }}</label>
                       
                    </div>
                 </div>
                 @endforeach
                 <!-- checkbox 2col -->

                 <!-- checkbox 1col -->
                 @error('opciones') <span class="text-danger error">{{ $message }}</span>@enderror
              </div>
           </div>
           <div class="osahan-area text-center mt-3">
              <button type="button" class="btn btn-outline-primary" wire:click.prevent="store()">GUARDAR</button>
           </div>
           <hr>
         
        </div>

</div>
