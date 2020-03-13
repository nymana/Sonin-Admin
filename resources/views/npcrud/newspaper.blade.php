@extends('layouts.app')

@section('content')
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
        @foreach($newspapers as $news)
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
                <th class="tg-01ax">
                    <a href="{{ route('newspaper.edit',$news->id) }}"><img src="{{ asset('img/edit.svg') }}" width="25" height="25"></a>
                </th>
                <th class="tg-01ax">
                    <img src="{{ asset('img/eyeopen.svg') }}" width="25" height="25">
                </th>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
