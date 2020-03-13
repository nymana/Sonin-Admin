@extends('layouts.app')

@section('content')

<div class="card">
  <form action="{{route('comment.update',$update->id)}}" method="post" class="p-5">
    <input type="hidden" name="_method" value="PUT">

    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">ID :</span>
      </div>
      <div class="card px-4 pt-2">
        <label for="text">{{ $update->id }}</label>
      </div>
    </div>

    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1">Comment Body:</span>
      </div>
      <input type="text" class="form-control" name="Name" value="{{ $update->c_Body }}">
    </div>

    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="submit" value="save" class="btn btn-primary float-right">
  </form>
</div>
</div>

@endsection
