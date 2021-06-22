<div>
    <div class="video-block section-padding">
        <div class="row">
           <div class="col-md-12">
              <div class="main-title">
                 <div class="btn-group float-right right-action">
                    <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                       <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                       <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                       <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                    </div>
                 </div>
                 <h6>Channels</h6>
              </div>
           </div>

           <div class="col-xl-3 col-sm-6 mb-3">
              @foreach ($categorias as $item)
              <div class="channels-card">
                <div class="channels-card-image">
                   <a href="#"><img class="img-fluid" src="img/s2.png" alt=""></a>
                   <div class="channels-card-image-btn">
                       <a href="{{ route('canal', $item->id) }}" class="btn btn-outline-danger btn-sm">IR </a></div>
                </div>
                <div class="channels-card-body">
                   <div class="channels-title">
                      <a href="#">{{ $item->nombre }}</a>
                   </div>
                   <div class="channels-view">
                      382,323 subscribers
                   </div>
                </div>
             </div>
              @endforeach
           </div>

        </div>

     </div>
     <hr>

</div>