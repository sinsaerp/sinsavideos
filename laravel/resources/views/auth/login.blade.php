
<!DOCTYPE html>
<html lang="eS">
   <head>
     @include('theme.estilos')
     <title>INICIO DE SESION</title>
   </head>
   <body class="login-main-body">
      <section class="login-main-wrapper">
         <div class="container-fluid pl-0 pr-0">
            <div class="row no-gutters">
               <div class="col-md-5 p-5 bg-white full-height">
                  <div class="login-main-left">
                     <div class="text-center mb-5 login-main-left-header pt-4">
                        <center>
                           <img src="{{ asset('theme/assets/img/logo2.png') }}" class="img-fluid" alt="LOGO" width="110px" height="110px">
                        </center>
                        <h3 class="mt-3 "><b>Bienvenido a SINSA ERP Manuales</b></h3>                        
                     </div>
                     @if ($errors->any())
                     <div class="alert alert-danger">
                         <ul>
                             @foreach ($errors->all() as $error)
                                 <li>{{ $error }}</li>
                             @endforeach
                         </ul>
                     </div>
                 @endif
                     <form  autocomplete="off" action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="form-group">
                           <label>Usuario</label>
                           <input type="text" class="form-control" name="username">
                        </div>
                        <div class="form-group">
                           <label>Contraseña</label>
                           <input type="password" class="form-control" name="password">
                        </div>
                        <div class="mt-4">
                           <div class="row">
                              <div class="col-12">
                                 <button type="submit" class="btn btn-outline-primary btn-block btn-lg">INGRESAR</button>
                              </div>
                           </div>
                        </div>
                     </form>                     
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="login-main-right bg-white p-5 mt-5 mb-5">
                     <div class="owl-carousel owl-carousel-login">
                        <div class="item">
                           <div class="carousel-login-card text-center">
                             <center> <img src="{{ asset('theme/assets/img/sinsa.png') }}" class="img-fluid" alt="LOGO"></center>
                              <h5 class="mt-5 mb-3"SINSA ERP</h5>
                              <p class="mb-4">Sistema de Información en Salud</p>
                           </div>
                        </div>
                        
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      @include('theme.scripts')
   </body>
</html>