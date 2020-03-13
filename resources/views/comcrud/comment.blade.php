@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-header bg-primary text-light">Dashboard</div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Body</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
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
        <th class="tg-01ax">
          <a href="{{ route('comment.edit',$com->id) }}"><img src="{{ asset('img/edit.svg') }}" width="25" height="25"></a>
        </th>
        <th class="tg-01ax">
          <a href="{{ route('comment.destroy',$com->id) }}">
            <button class="btn btn-danger">Delete</button>
          </a>
        </th>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
