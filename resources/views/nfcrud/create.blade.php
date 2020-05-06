@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <form action="{{route('newsfeed.store')}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}">

            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Title" aria-label="title" aria-describedby="basic-addon1" name="title"></input>
            </div>
            
            <div class="input-group mb-3">
                <textarea type="text" class="form-control" placeholder="Description" aria-label="bodyText" rows="10" aria-describedby="basic-addon1" name="description"></textarea>
            </div>
            <hr>
            <div class="form-group">
                <label for="exampleFormControlFile1">Зураг сонгоно уу!</label>
                <input style="background: #fff" type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
            </div>
            <div class="input-group mb-3">
                <input type="submit" class="btn btn-primary btn-lg btn-block" value="save">
            </div>
        </form>
    </div>
</div>
@endsection
