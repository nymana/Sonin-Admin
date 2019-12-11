@extends('layouts.app')

@section('content')
    <div class="container rounded" id="content">
        <div class="row justify-content-center">
            <div class="col-md-2">
                <div class="card">
                    <div class="card-header bg-primary text-light">Setting</div>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="/newspaper" class="text-primary ">Newspaper</a></li>
                        <li class="list-group-item"><a href="/newsfeed" class="text-dark">News feed</a></li>
                        <li class="list-group-item"><a href="#" class="text-dark">loves</a></li>
                        <li class="list-group-item"><a href="comment" class="text-dark">Comments</a></li>
                        <li class="list-group-item"><a href="user" class="text-dark">Users</a></li>
                        <li class="list-group-item"><a href="#" class="text-dark">Images</a></li>
                        <li class="list-group-item"><a href="#" class="text-dark">Banners</a></li>
                    </ul>
                </div>
                <div class="card" style="padding-top: 20px;">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="#" class="text-dark">Add Newspaper</a></li>
                        <li class="list-group-item"><a href="#" class="text-dark">Add News Feed</a></li>
                    </ul>
                </div>
            </div>


            <div class="col-md-10">
                <div class="card">
                    <div class="card-header"></div>
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
                            <textarea class="form-control" value="{{ $update->json }}" placeholder="JSON"
                                      aria-label="With textarea"></textarea>
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
                                        <button type="submit" class="btn btn-success">Upload</button>
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
                                        <button type="submit" class="btn btn-success">Upload</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
