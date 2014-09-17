@extends('wardrobe::admin.layout')

@section('content')
  <div class="container">

    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach

    {!! Form::open(['route' => 'admin.post.store']) !!}
        @include('wardrobe::admin.modules.post-form')
    {!! Form::close() !!}


  </div>
@stop