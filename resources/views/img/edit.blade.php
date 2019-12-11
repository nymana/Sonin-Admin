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
                        <li class="list-group-item"><a href="commnet"class="text-dark">Comments</a></li>
                        <li class="list-group-item"><a href="#"class="text-dark">Users</a></li>
                        <li class="list-group-item"><a href="#"class="text-primary">Images</a></li>
                        <li class="list-group-item"><a href="#"class="text-dark">Banners</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10">
                <div class="card">

                </div>
            </div>

        </div>
    </div>
@endsection
