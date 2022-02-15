@extends('layouts.main-layout')

@section('content')

    <a class="btn btn-primary" href="{{route('postcard.create')}}">Crea il tuo post</a>

    <postcards-component></postcards-component>
    
@endsection