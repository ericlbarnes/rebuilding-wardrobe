@extends('wardrobe::admin.layout')

@section('content')
  <div class="container">

    <table class="grid grid__posts">
        <tr>
            <th>Title</th>
            <th>Status</th>
            <th>Published</th>
            <th></th>
        </tr>
        @foreach ($posts as $post)
            @include('wardrobe::admin.post.item')
        @endforeach
    </table>

  </div>
@stop
