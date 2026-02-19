@extends('components.layouts.app')

@section('image_cotedroit')
    <img src="{{ asset('images/gutsDeboutPensif.jpg') }}" alt="Guts">
@endsection

@section('image_cotegauche')
    <img src="{{ asset('images/gutsDeboutPensif.jpg') }}" alt="Guts" class="scale-x-[-1] ">
@endsection

@section('description')
    {{ $character->description }}
@endsection

@section('before_eclipse')
    {{ $character->before_eclipse }}
@endsection

@section('after_eclipse')
    {{ $character->after_eclipse }}
@endsection

@section('imagePersoPetitScreen')
    <img src="{{ asset('images/gutsDeFace.png') }}" alt="GutsDeFace">
    @endsection