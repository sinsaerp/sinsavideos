<nav class="navbar navbar-expand navbar-light bg-white static-top osahan-nav sticky-top">
   &nbsp;&nbsp; 
   
   <a class="navbar-brand mr-1" href="index.html">
      <img class="img-fluid" alt="" src="{{ asset('theme/assets/img/logo.png') }}"></a>
   <!-- Navbar Search -->
   <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-5 my-2 my-md-0 osahan-navbar-search">
      <div class="input-group">
         <input type="hidden" class="form-control" placeholder="Search for..." >
         
      </div>
   </form>
   <!-- Navbar -->
   <ul class="navbar-nav ml-auto ml-md-0 osahan-right-navbar">     
      
     
      <li class="nav-item dropdown no-arrow osahan-right-navbar-user">
         <a class="nav-link dropdown-toggle user-dropdown-link" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <img alt="Avatar" src="{{ asset('theme/assets/img/user.png') }}">
         @if (!empty(auth()->user()))
          <small> <b>{{ auth()->user()->nombre }}</b> </small> 
         @endif 
         </a>
         <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="{{ route('historial') }}"><i class="fas fa-fw fa-user-circle"></i> &nbsp; Historial</a>
           
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-fw fa-sign-out-alt"></i> &nbsp; Salir</a>
         </div>
      </li>
   </ul>
</nav>