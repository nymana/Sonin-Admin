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
                        <li class="list-group-item"><a href="commnet"class="text-primary">Comments</a></li>
                        <li class="list-group-item"><a href="user"class="text-dark">Users</a></li>
                        <li class="list-group-item"><a href="#"class="text-dark">Images</a></li>
                        <li class="list-group-item"><a href="#"class="text-dark">Banners</a></li>
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
                            <th scope="col">Body</th>
                            <th scope="col">JSON</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($comment as $com)
                            <tr>
                                <th class="tg-0lax">
                                    {{$com->id}}
                                </th>
                                <th class="tg-0lax">
                                    {{$com->c_Body}}
                                </th>
                                <th class="tg-0lax">
                                    {{$com->json}}
                                </th>
                                <th class="tg-01ax">
                                    <a href="{{ route('comment.edit',$com->id) }}"><img src="{{ asset('img/edit.svg') }}" width="25" height="25"></a>
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
