@extends('layouts.app')
@section('content')


<form method='POST' action="{{route('posts.index')}}">
@csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Description</label>
        <textarea name="description" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Post Creator</label>
        <select class="form-control" name="user_id">
            @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>

    </div>

    <button type="submit" class="btn btn-primary">submit </button>
</form>
@endsection