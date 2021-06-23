<div>

    @include('livewire.usuarios.create')
    @include('livewire.usuarios.bloquear')
    @if (session()->has('message'))
    <script>
        mensaje("{{ session('message') }}");
    </script>
    @endif

    @if (session()->has('error'))
    <script>
        error("{{ session('error') }}");
    </script>
    @endif
    @include('livewire.usuarios.tabla')

</div>
