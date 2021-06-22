
<!DOCTYPE html>
<html lang="en">
   <head>

      @include('theme.estilos')
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
   </body>
</html>
