@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header bg-primary text-light mb-2">Edit</div>
    <form action="{{route('newspaper.update',$update->id)}}" method="post" enctype="multipart/form-data">

        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <div class="input-group mb-3">
            <input type="hidden" name="_method" value="PUT">
            <input type="text" class="form-control" value="{{ $update->title }}" name="title">
        </div>

        <div class="input-group mb-3">
            <textarea class="form-control" value="{{ $update->description }}" placeholder="Description" name="description" rows="10">
                {{ $update->description }}
            </textarea>
        </div>

        <div class="input-group mb-3">
            <input type="file" name="image" class="form-control">    
        </div>

        <div class="input-group mb-3">
            <input type="file" name="file_url" class="form-control">
        </div>  

        <div class="input-group mb-3">
            <input type="submit" class="btn btn-primary btn-lg btn-block" value="save">
        </div>
    </form>
</div>
@endsection
