@extends('layouts.app')

@section('content')
    <div class="container rounded" id="content">
        <div class="row justify-content-center">
            <div class="col-md-2">
                <div class="card">
                    <div class="card-header bg-primary text-light">Setting</div>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="newspaper"class="text-dark ">Newspaper</a></li>
                        <li class="list-group-item"><a href="newsfeed"class="text-primary">News feed</a></li>
                        <li class="list-group-item"><a href="#"class="text-dark">loves</a></li>
                        <li class="list-group-item"><a href="comment"class="text-dark">Comments</a></li>
                        <li class="list-group-item"><a href="user"class="text-dark">Users</a></li>
                        <li class="list-group-item"><a href="#"class="text-dark">Images</a></li>
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
                        <form action="{{route('newsfeed.update',$update->id)}}" method="post">
                            <div class="input-group mb-3">
                                <input type="hidden" name="_method" value="PUT">
                                <input type="text" class="form-control" value="{{ $update->bodyText }}" placeholder="Body Text" aria-label="bodyText" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <textarea class="form-control" placeholder="JSON" aria-label="With textarea"></textarea>
                            </div>
                            <div class="input-group mb-3">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="save">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
