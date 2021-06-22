
<!DOCTYPE html>
<html lang="es">
   <head>
        <title>@yield('titulo', 'SINSA VIDEOS')</title>
      @include('theme.estilos')
      @livewireStyles
   </head>
   <body id="page-top">
      @include('theme.topbar')
      <div id="wrapper">
         <!-- Sidebar -->
         @include('theme.sidebar')
         <div id="content-wrapper">
            <div class="container-fluid">
              @yield('content')
            </div>
            <!-- /.container-fluid -->
            <!-- Sticky Footer -->

         </div>
         <!-- /.content-wrapper -->
      </div>
      <!-- /#wrapper -->
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
      </a>
      <!-- Logout Modal-->
      @include('theme.mcerrar')
      @include('theme.scripts')
      @livewireScripts
      <script type="text/javascript">
       window.livewire.on('modal', () => {
           $('#exampleModal').modal('hide');
           $('#detallesModal').modal('hide');
       });

       window.livewire.on('notificacion', () => {
           $('#notificacionModal').modal('show');
       });
   </script>
   <script>
      function mensaje(valor){
       swal(
           {
               title: 'SINSA ERP',
               text: valor,
               type: 'success',
               showCancelButton: true,
               confirmButtonClass: 'btn btn-success',
               cancelButtonClass: 'btn btn-danger m-l-10'
           }
       )
      }
      function advertencia(valor){
       swal(
           {
               title: 'SINSA ERP',
               text: valor,
               type: 'warning',
               showCancelButton: true,
               confirmButtonClass: 'btn btn-success',
               cancelButtonClass: 'btn btn-danger m-l-10'
           }
       )
      }
   </script>
   </body>
</html>
