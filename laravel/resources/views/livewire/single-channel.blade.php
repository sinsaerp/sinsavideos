<div>






              <div class="row">
                @foreach ($videos as $item)
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="video-card">
                       <div class="video-card-image">

                          <a href="#"><img class="img-fluid" src="img/v1.png" alt=""></a>
                          <div class="time">3:50</div>
                       </div>
                       <div class="video-card-body">
                          <div class="video-title">
                             <a href="#">{{ $item->video->titulo }}</a>
                          </div>
                          <div class="video-page text-success">
                            {{ $item->categoria->nombre }}  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                          </div>
                          <div class="video-view">
                             1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                          </div>
                          <a class="play-icon" href="{{ route('detalles', $item->video_id) }}"><i class="fas fa-play-circle"></i></a>
                       </div>
                    </div>
                 </div>
                @endforeach

              </div>


              <nav aria-label="Page navigation example">
                 <ul class="pagination justify-content-center pagination-sm mb-0">
                    <li class="page-item disabled">
                       <a tabindex="-1" href="#" class="page-link">Previous</a>
                    </li>
                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item">
                       <a href="#" class="page-link">Next</a>
                    </li>
                 </ul>
              </nav>


</div>
