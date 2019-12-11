@extends('layouts.app')

@section('content')
    <div class="container rounded" id="content">
        <div class="row justify-content-center">
            <div class="col-md-2">
                <div class="card">
                    <div class="card-header bg-primary text-light">Setting</div>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="newspaper"class="text-dark ">Newspaper</a></li>
                        <li class="list-group-item"><a href="newsfeed"class="text-dark">News feed</a></li>
                        <li class="list-group-item"><a href="#"class="text-dark">loves</a></li>
                        <li class="list-group-item"><a href="comment"class="text-dark">Comments</a></li>
                        <li class="list-group-item"><a href="user"class="text-dark">Users</a></li>
                        <li class="list-group-item"><a href="image"class="text-primary">Images</a></li>
                        <li class="list-group-item"><a href="#"class="text-dark">Banners</a></li>
                    </ul>
                </div>
                <div class="card" style="padding-top: 20px;">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="#" class="text-dark">Add Newspaper</a></li>
                        <li class="list-group-item"><a href="#"class="text-dark">Add News Feed</a></li>
                    </ul>
                </div>
            </div>


            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <br>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                            <br>
                        @endif
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Opps!</strong> There were something went wrong with your input.
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <br>
                        @endif
                        <form action="{{ url('save') }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                            @csrf
                            <div class="avatar-upload">
                                <div class="avatar-edit">
                                    <input type='file' id="image" name="image" onchange="readURL(this);" accept=".png, .jpg, .jpeg" />
                                    <label for="imageUpload"></label>
                                </div>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card" style="margin-top: 5vw;">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Image</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($image as $img)
                            <tr>
                                <th class="tg-0lax">
                                    {{$img->id}}
                                </th>
                                <th class="tg-01ax">
                                    {{$img->image}}
                                </th>
                                <th class="tg-01ax">
                                    <a href="{{ route('image.edit',$img->id) }}"><img src="{{ asset('img/edit.svg') }}" width="25" height="25"></a>
                                </th>
                                <th class="tg-01ax">
                                    <img src="{{ asset('img/eyeopen.svg') }}" width="25" height="25">
                                </th>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

