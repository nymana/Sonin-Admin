@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header bg-primary text-light">Dashboard</div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Student ID</th>
            <th scope="col">Email</th>
            <th scope="col">Edit</th>
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
                    {{$use->studentid}}
                </th>
                <th class="tg-0lax">
                    {{$use->email}}
                </th>
                <th class="tg-01ax">
                    <a href="{{ route('user.edit',$use->id) }}"><img src="{{ asset('img/edit.svg') }}" width="25" height="25"></a>
                </th>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
