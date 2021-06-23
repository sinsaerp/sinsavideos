<ul class="sidebar navbar-nav">
    <li class="nav-item active">
       <a class="nav-link" href="{{ route('home') }}">
       <i class="fas fa-fw fa-home"></i>
       <span>Inicio</span>
       </a>
    </li>
    @if (auth()->user()->tipo==1 && !empty(auth()->user()) )
    <li class="nav-item">
      <a class="nav-link" href="{{ route('subir') }}">
      <i class="fas fa-fw fa-cloud-upload-alt"></i>
      <span>Subir Videos</span>
      </a>
   </li> 
   <li class="nav-item">
      <a class="nav-link" href="{{ route('usuarios') }}">
      <i class="fas fa-fw fa-users"></i>
      <span>Usuarios</span>
      </a>
   </li> 
    @endif  
    
    <li class="nav-item">
       <a class="nav-link" href="{{ route('historial') }}">
       <i class="fas fa-fw fa-history"></i>
       <span>Historial</span>
       </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-toggle="modal" data-target="#logoutModal">
      <i class="fas fa-times"></i>
      <span>Cerrar Sesión</span>
      </a>
   </li>
    

 </ul>
