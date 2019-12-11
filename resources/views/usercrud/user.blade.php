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
                    <div class="card-header bg-primary text-light">Dashboard</div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">gender</th>
                            <th scope="col">Birthday</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Visible</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($user as $use)
                            <tr>
                                <th class="tg-0lax">
                                    {{$use->id}}
                                </th>
                                <th class="tg-0lax">
                                    {{$use->name}}
                                </th>
                                <th class="tg-0lax">
                                    {{$use->gender}}
                                </th>
                                <th class="tg-0lax">
                                    {{$use->birthday}}
                                </th>
                                <th class="tg-0lax">
                                    {{$use->phone}}
                                </th>
                                <th class="tg-0lax">
                                    {{$use->email}}
                                </th>

                                <th class="tg-01ax">
                                    <a href="{{ route('user.edit',$use->id) }}"><img src="{{ asset('img/edit.svg') }}" width="25" height="25"></a>
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
@endsection
