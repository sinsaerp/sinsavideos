<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
       <div class="modal-content">
          <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">
               ¿Lista para salir?</h5>
             <button class="close" type="button" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">×</span>
             </button>
          </div>
          <div class="modal-body">Seleccione Aceptar a continuación si está listo para finalizar su sesión actual.</div>
          <form action="{{ route('logout') }}" method="POST">
          @csrf
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" href="login.html">Aceptar</button>
             <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
             
          </div>
         </form>
       </div>
    </div>
 </div>
