<div>
    <div class="video-block section-padding">
        <div class="row">
           <div class="col-md-12">
              <div class="main-title">                
                 <h6>INICIO</h6>
              </div>
           </div>

           
              @foreach ($categorias as $item)
              <div class="col-xl-3 col-sm-6 mb-3">
              <div class="channels-card">
                <div class="channels-card-image">
                   <a href="{{ route('canal', $item->id) }}"><img class="img-fluid" src="{{ asset('theme/assets/img/'.$item->imagen) }}" alt=""></a>
                   <div class="channels-card-image-btn">
                       <a href="{{ route('canal', $item->id) }}" class="btn btn-outline-danger btn-sm">VER </a></div>
                </div>
                <div class="channels-card-body">
                   <div class="channels-title">
                      <a href="{{ route('canal', $item->id) }}">{{ $item->nombre }}</a>
                   </div>
                   <div class="channels-view">
                      382,323 subscribers
                   </div>
                </div>
             </div>
            </div>
            @endforeach
          
        </div>

     </div>
     <hr>

</div>
