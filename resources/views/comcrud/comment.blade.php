@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-header bg-primary text-light">Dashboard</div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Comment</th>
        <th scope="col">Type</th>
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
          {{$com->comment}}
        </th>
        <th class="tg-0lax">
          @if(empty($com->comment->newspaperCommentId))
            <p>Newsfeed</p>
          @elseif(empty($com->comment->newsfeedCommentId))
            <p>Newspaper</p>
          @endif
        </th>
        <th class="tg-01ax">
          <a href="{{ route('comment.edit',$com->id) }}"><img src="{{ asset('img/edit.svg') }}" width="25" height="25"></a>
        </th>
        <th class="tg-01ax">
          <form action="{{ route('comment.destroy',$com->id) }}" method="post">
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
