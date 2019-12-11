@extends('layouts.app')

@section('content')
    <div class="container rounded" id="content">
        <div class="row justify-content-center">
            <div class="col-md-2">
                <div class="card">
                    <div class="card-header bg-primary text-light">Setting</div>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="newspaper"class="text-dark">Newspaper</a></li>
                        <li class="list-group-item"><a href="newsfeed"class="text-dark">News Feed</a></li>
                        <li class="list-group-item"><a href="#"class="text-dark">loves</a></li>
                        <li class="list-group-item"><a href="comment"class="text-dark">Comments</a></li>
                        <li class="list-group-item"><a href="user"class="text-primary">Users</a></li>
                        <li class="list-group-item"><a href="#"class="text-dark">Images</a></li>
                        <li class="list-group-item"><a href="#"class="text-dark">Banners</a></li>
                    </ul>
                </div>
                <div class="card" style="margin-top: 20px">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="#" class="text-dark">Add Newspaper</a></li>
                        <li class="list-group-item"><a href="#"class="text-dark">Add News Feed</a></li>
                    </ul>
                </div>
            </div>


            <div class="col-md-10">
                <div class="card">
                    <form action="{{route('user.update',$update->id)}}" method="post">
                        <input type="hidden" name="_method" value="PUT">
                        Name:<input type="text" name="Name" value="{{ $update->Name }}">
                        Gender:<input type="text" name="Name" value="{{ $update->gender }}">
                        Birthday:<input type="text" name="Name" value="{{ $update->birthday }}">
                        Phone:<input type="text" name="Name" value="{{ $update->phone }}">
                        Email:<input type="text" name="Name" value="{{ $update->email }}">
                        Password:<input type="text" name="Name" value="{{ $update->password }}">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="submit" value="save">
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
