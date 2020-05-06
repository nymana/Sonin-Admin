@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header bg-primary text-light">Dashboard</div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
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
                    <a href="{{ route('newspaper.edit',$news->id) }}"><img src="{{ asset('img/edit.svg') }}" width="25" height="25"></a>
                </th>
                <th class="tg-01ax">
                    <form action="{{ route('newspaper.destroy',$news->id) }}" method="post">
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
