@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header bg-primary text-light">Dashboard</div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($newsfeed as $nf)
            <tr>
                <th class="tg-0lax">
                    {{$nf->id}}
                </th>
                <th class="tg-01ax">
                    {{$nf->title}}
                </th>
                <th class="tg-01ax">
                    <a href="{{ route('newsfeed.edit',$nf->id) }}"><img src="{{ asset('img/edit.svg') }}" width="25" height="25"></a>
                </th>
                <th class="tg-01ax">
                    <form action="{{ route('newsfeed.destroy',$nf->id) }}" method="post">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </th>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
