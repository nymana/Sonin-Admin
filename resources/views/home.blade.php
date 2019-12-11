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
                    <li class="list-group-item"><a href="user"class="text-dark">Users</a></li>
                    <li class="list-group-item"><a href="image"class="text-dark">Images</a></li>
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
                            <th scope="col">Title</th>
                            <th scope="col">Comments</th>
                            <th scope="col">Downloads</th>
                            <th scope="col">Views</th>
                            <th scope="col">IsApprove</th>
                            <th scope="col">Upload At</th>
                            <th scope="col">Last Update </th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($newspaper as $news)
                        <tr>
                            <th class="tg-0lax">
                                {{$news->id}}
                            </th>
                            <th class="tg-01ax">
                                {{$news->title}}
                            </th>
                            <th class="tg-01ax">
                                {{$news->commentCounts}}
                            </th>
                            <th class="tg-01ax">
                                {{$news->downloadCounts}}
                            </th>
                            <th class="tg-01ax">
                                {{$news->viewCounts}}
                            </th>
                            <th class="tg-01ax">
                                {{$news->isApprove}}
                            </th>
                            <th class="tg-01ax">
                                {{$news->created_at}}
                            </th>
                            <th class="tg-01ax">
                                {{$news->updated_at}}
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
