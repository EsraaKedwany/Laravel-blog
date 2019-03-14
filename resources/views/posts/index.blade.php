@extends('layouts.app')
@section('content')

<a href="{{route('posts.create')}}" class="btn btn-success">Create Post</a>

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
          <td>{{$post->user_id}}</td>  
          <td>{{$post->title}}</td>  
          <td>{{$post->user->name}}</td>  
          <td>{{$post->created_at}}</td>

        </tr>
    @endforeach

</table>
@endsection