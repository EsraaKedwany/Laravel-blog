@extends('layouts.app')
@section('content')

<form>
  <h3>Post Info</h3>
    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">Title</label>
      <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$post->title}}">
      </div>
    </div>
    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">Description</label>
      <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$post->description}}">
      </div>
    </div>

  <h3>Post creator Info</h3>
    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">Name:</label>
      <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$post->user->name}}">
      </div>
    </div>
    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">Email:</label>
      <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$post->user->email}}">
      </div>
    </div>
    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">Created at:</label>
      <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$post->user->created_at}}">
      </div>
    </div>
</form>
@endsection