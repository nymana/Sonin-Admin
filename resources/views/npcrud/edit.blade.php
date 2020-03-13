@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header bg-primary text-light mb-2">Edit</div>
    <form action="{{route('newspaper.update',$update->id)}}" method="post">
        <div class="input-group mb-3">
            <input type="hidden" name="_method" value="PUT">
            <input type="text" class="form-control" value="{{ $update->title }}" placeholder="Title"
                   aria-label="title" aria-describedby="basic-addon1" name="title">
        </div>

        <div class="input-group mb-3">
            <textarea class="form-control" value="{{ $update->description }}" placeholder="Describe"
                      aria-label="With textarea" name="description"></textarea>
        </div>
        <div class="input-group mb-3">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile01">
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="submit" class="btn btn-primary btn-lg btn-block" value="save">
        </div>
    </form>
</div>
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-body">
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

            <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <input type="file" name="image" class="form-control">
                        <input type="hidden" name="newspaper_id" value="{{ $update->id }}">
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">Image Upload</button>
                    </div>
                </div>
            </form>

            <form action="{{ route('file.upload.post') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <input type="file" name="file" class="form-control">
                        <input type="hidden" name="newspaper_id" value="{{ $update->id }}">
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">File Upload</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
