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

                 <div class="col-lg-3">
                    <div class="form-group">
                       <label for="e4">Visible</label>
                       <select class="custom-select" wire:model.defer="visible">
                          <option value="SI">SI</option>
                          <option value="NO">NO</option>
                       </select>
                       @error('visible') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                 </div>
              </div>
              <div class="row">
                 <div class="col-lg-12">
                    <div class="form-group">
                       <label for="e7">URL Video</label>
                       <input type="text" placeholder="URL" wire:model.defer="ruta" class="form-control">
                       @error('ruta') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                 </div>
              </div>
              <div class="row ">
                 <div class="col-lg-12">
                    <div class="main-title">
                       <h6>Servicios</h6>
                    </div>
                 </div>
              </div>
              <div class="row category-checkbox">
                 <!-- checkbox 1col -->
                 @foreach ($categorias as $index => $item)
                 <div class="col-lg-2 col-xs-6 col-4">
                    <div class="custom-control custom-checkbox">
                        <input wire:model="opciones.{{ $index }}" value="{{ $item->id }}"
                        type="checkbox">
                       <label >{{ $item->nombre }}</label>
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
           <div class="terms text-center">
              <p class="mb-0">There are many variations of passages of Lorem Ipsum available, but the majority <a href="#">Terms of Service</a> and <a href="#">Community Guidelines</a>.</p>
              <p class="hidden-xs mb-0">Ipsum is therefore always free from repetition, injected humour, or non</p>
           </div>
        </div>

</div>
