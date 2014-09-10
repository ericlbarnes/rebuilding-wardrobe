@extends('wardrobe::admin.layout')

@section('content')
  <div class="container">
    @foreach ($modules as $file)
        @include('wardrobe::admin.modules.'.$file)
        <hr>
    @endforeach
  </div>
@stop