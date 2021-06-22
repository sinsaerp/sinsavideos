<div>

    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-5 my-2 my-md-0 osahan-navbar-search">
        <div class="input-group">
           <input type="text" class="form-control"  type="text" placeholder="Buscar Video" wire:model="term">
           <div class="input-group-append">
              <button class="btn btn-light" type="button">
              <i class="fas fa-search"></i>
              </button>
           </div>
        </div>
     </form>
     <div wire:loading>Searching users...</div>
     <div wire:loading.remove>
    @if ($term == "")
        <div class="text-gray-500 text-sm">
            Enter a term to search for users.
        </div>
    @else
        @if($users->isEmpty())
            <div class="text-gray-500 text-sm">
                No matching result was found.
            </div>
        @else
            @foreach($users as $user)
                <ul>

                    <a href="{{ route('detalles', $user->id)}}"><li class="text-lg text-gray-900 text-bold">{{$user->titulo}}</li></a>
                </div>
            @endforeach
        @endif
    @endif

    <div class="px-4 mt-4">
        {{$users->links()}}
    </div>

</div>
