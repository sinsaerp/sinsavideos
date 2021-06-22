@extends('theme.app')
@section('titulo')
    CANALES
@endsection

@section('content')

<livewire:single-channel :idcategoria="$id"   />

@endsection

