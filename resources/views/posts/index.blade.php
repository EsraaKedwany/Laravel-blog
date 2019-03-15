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
            <th scope="col">Slug</th>
            <th scope="col">actions</th>
        </tr>
    </thead>

    @foreach($posts as $post)
        
        <tr>
            <td>{{$post->id}}</td>  
            <td>{{$post->title}}</td>  
            <td>{{$post->user->name}}</td>  
            <td>{{$post->created_at}}</td>
            <td>{{$post->slug}}</td>  
            <td>
                <a href="{{route('posts.show',$post->id)}}" class="btn btn-primary">Show</a>
                <a href="{{route('posts.edit',$post->id)}}" class="btn btn-primary">Edit</a>
                <form method='POST' action="{{route('posts.destroy',$post->id)}}">
                    @csrf
                    {{method_field('DELETE')}}
                    <button type="submit" onClick= "return confirm('Are you sure want to delete??')" class="btn btn-primary">Delete </button>
                </form>
            </td>
        </tr>
    @endforeach

</table>
@endsection