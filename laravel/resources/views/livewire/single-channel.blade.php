<div>
              <div class="row">
               <div class="col-md-12">
                  <div class="main-title">
                     
                     <div class="btn-group float-right right-action">
                        <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ordenar por <i class="fa fa-caret-down" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                           <a class="dropdown-item" href="#" wire:click="ordenar('created_at')"><i class="fas fa-calendar-alt"></i> &nbsp; Fecha</a>                           
                        </div>
                     </div>
                     <div class="btn-group float-right right-action">
                        <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Mostrar  <i class="fa fa-caret-down" aria-hidden="true"></i>
                        </a>                        
                        <div class="dropdown-menu dropdown-menu-right">
                           <a class="dropdown-item" href="#" wire:click="paginas(5)"><i class="fas fa-fw fa-star"></i> &nbsp; 5</a>
                           <a class="dropdown-item" href="#" wire:click="paginas(15)"><i class="fas fa-fw fa-star"></i> &nbsp; 15</a>
                           <a class="dropdown-item" href="#" wire:click="paginas(20)"><i class="fas fa-fw fa-star"></i> &nbsp; 20</a>
                           <a class="dropdown-item" href="#" wire:click="paginas(25)"><i class="fas fa-fw fa-star"></i> &nbsp; 25</a>
                           <a class="dropdown-item" href="#" wire:click="paginas(30)"><i class="fas fa-fw fa-star"></i> &nbsp; 30</a>
                           <a class="dropdown-item" href="#" wire:click="paginas(35)"><i class="fas fa-fw fa-star"></i> &nbsp; 40</a>

                        </div>
                     </div>
                     <h6>    <a href="{{ route('canal', $categoria->id) }}"><img class="img-fluid" src="{{ asset('theme/assets/img/'.$categoria->imagen) }}" alt=""></a>  {{ $categoria->nombre }}</h6>
                    
                  </div>
               </div>
                @foreach ($videos as $item)
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="video-card">                      
                       <div class="video-card-body">
                          <div class="video-title">
                             <a href="#">{{ $item->video->titulo }}</a>
                          </div>
                          <div class="video-page text-success">
                            {{ $item->categoria->nombre }} 
                             <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                          </div>
                          <div class="video-view">
                             1.8M Vistas &nbsp;<i class="fas fa-calendar-alt"></i> {{ $item->video->created_at->format('d/m/Y')}}
                          </div>
                          <a class="play-icon" href="{{ route('detalles', $item->video_id) }}"><i class="fas fa-play-circle"></i></a>
                       </div>
                    </div>
                 </div>
                @endforeach
              </div>

              <nav aria-label="Page navigation example">
               <center>{{ $videos->links() }}</center>
              </nav>


</div>
