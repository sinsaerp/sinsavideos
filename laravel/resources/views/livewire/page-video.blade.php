<div>
   <link rel="stylesheet" href="{{ asset('theme/assets/css/responsive.css') }}">

    <div class="video-block-right-list section-padding">
        <div class="row mb-4">
        <div class="col-md-8">
             <div class="single-video">
               <div class="video-responsive">
                  <iframe 
                  src="{{ $video->video->ruta }}" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
               </div>

              </div>
        </div>
        <div class="col-md-4">
              @foreach ($sugerencias as $item)
              <div class="video-slider-right-list">
               <div class="video-card video-card-list">
                        <div class="video-card-image">
                           <a class="play-icon" href="{{ route('detalles', $item->video->id) }}"><i class="fas fa-play-circle"></i></a>
                                                  
                        </div>
                        <div class="video-card-body">                          
                           <div class="video-title">
                              <a href="{{ route('detalles', $item->video->id) }}">{{ $item->video->titulo }}</a>
                           </div>
                           <div class="video-page text-success">
                              {{ $item->categoria->nombre }}  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                           </div>
                           <div class="video-view">
                              1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> {{ $item->video->created_at->format('d/m/Y')}}
                           </div>
                        </div>
                     </div>
                    
            </div>
              @endforeach
        </div>
        </div>
     </div>
     <div class="video-block section-padding">
        <div class="row">
           <div class="col-md-8">
              <div class="single-video-left">
                 <div class="single-video-title box mb-3">
                    <h2><a href="#">{{ $video->video->titulo }}</a></h2>
                    <p class="mb-0"><i class="fas fa-eye"></i> {{ $vistas }} vistas</p>
                 </div>                
                 <div class="single-video-info-content box mb-3">                   
                    <h6>Categoria</h6>
                    <p>{{ $video->categoria->nombre }}</p>
                    <h6>Descripción</h6>
                    <p>{{ $video->video->descripcion }}</p>
                    
                 </div>
               
              </div>
           </div>
           
        </div>
</div>
