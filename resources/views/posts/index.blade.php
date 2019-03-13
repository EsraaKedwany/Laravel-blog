@extends('layouts.app')
@section('content')

<a href="" class="btn btn-success">Create Post</a>

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tilte</th>
            <th scope="col">Posted by</th>
            <th scope="col">Created at</th>
        </tr>
    </thead>

    @foreach($posts as $post)
        
        <tr>
          <td>{{$post->id}}</td>  
          <td>{{$post->title}}</td>  
          <td>me</td>  
          <td>{{$post->created-at}}</td>  

        </tr>
    @endforeach

</table>
@endsection