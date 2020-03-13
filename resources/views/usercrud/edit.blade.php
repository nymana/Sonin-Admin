@extends('layouts.app')

@section('content')
<div class="card">
  <form action="{{route('user.update',$update->id)}}" method="post" class="p-5">
    <input type="hidden" name="_method" value="PUT">
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Name:</span>
      </div>
      <input type="text"  class="form-control" name="Name" value="{{ $update->name }}">
    </div>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Student ID:</span>
      </div>
      <input type="text" class="form-control" name="Name" value="{{ $update->studentid }}">
    </div>

    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Email:</span>
      </div>
      <input type="text" class="form-control" name="Name" value="{{ $update->email }}">
    </div>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Password:</span>
      </div>
      <input type="text" class="form-control" name="Name" value="{{ $update->password }}">
    </div>

    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="submit" value="save" class="btn btn-primary float-right">
  </form>
</div>
@endsection
