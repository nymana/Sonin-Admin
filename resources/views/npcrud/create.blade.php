@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header bg-primary text-light mb-2">Edit</div>
    <form action="{{route('newspaper.store')}}" method="post" enctype="multipart/form-data">

        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Title" aria-label="title" aria-describedby="basic-addon1" name="title">
        </div>

        <div class="input-group mb-3">
            <textarea class="form-control" placeholder="Describe" rows="10" aria-label="With textarea" name="description"></textarea>
        </div>
        
        <div class="input-group md-3">
            <label style="margin-left: 10px;" for="exampleFormControlFile1">Зураг сонгоно уу!</label>
            <input style="background: #fff" type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
        </div>
        <hr>
        <div class="input-group md-3">
            <label style="margin-left: 10px;" for="exampleFormControlFile1">Файл сонгоно уу!</label>
            <input style="background: #fff" type="file" class="form-control-file" id="exampleFormControlFile1" name="file_url">
        </div>
        <br>
        <div class="input-group mb-3">
            <input type="submit" class="btn btn-primary btn-lg btn-block" value="save">
        </div>
    </form>
</div>
@endsection
