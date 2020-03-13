@extends('layouts.app')
@section('content')
<div class="card">
  <div class="card-header bg-primary text-white">Insert Banner</div>
  <div class="card-body">
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <strong>{{ $message }}</strong>
    </div>
    <img src="images/{{ Session::get('image') }}">
    @endif
    @if (count($errors) > 0)
    <div class="alert alert-danger">
      <strong>Whoops!</strong> There were some problems with your input.
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <form action="{{ route('insertBanner.store')}}" method="POST" enctype="multipart/form-data">
      @csrf
      Select Banner:
      <input type='file' name="image" onchange="readURL(this);" class="bg-white">
      <img id="blah" src="http://placehold.it/1800x900" alt="your image" class="img-fluid display-3" >
      <button type="submit" class="btn btn-primary float-right mt-3">save</button>
    </form>

  </div>
</div>
@endsection
