@extends('theme.app')
@section('titulo')
    VIDEOS
@endsection

@section('content')

<livewire:page-video :idvideo="$id" />

@endsection

