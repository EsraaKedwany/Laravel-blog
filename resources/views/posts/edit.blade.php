@extends('layouts.app')
@section('content')


<form method='Post' action="{{route('posts.update',$post->id)}}">
@csrf
{{method_field('PUT')}}
    <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title" value="{{$post->title}}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Description</label>
        <textarea name="description" class="form-control">{{$post->description}}</textarea>
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Post Creator</label>
        <select class="form-control" name="user_id">
            @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>

    </div>

    <button type="submit" class="btn btn-primary">Edit </button>
</form>
@endsection