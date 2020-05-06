@extends('layouts.app')


@section('content')
<div class="card">
  <div class="card-header bg-primary text-light">Banners</div>
  <div class="card-body">
    @foreach($banners as $ban)
    <div class="col-md-6">
      <img src="{{ $ban->image }}" width="300" height="200">
      <br><br>
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          @if($ban->newspaper_id)
            {{$ban->newspaper->title}}
          @else
            Мэдээгээ сонгоно уу
          @endif
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          @foreach($newspapers as $news)
            <a class="dropdown-item" href="/banners/{{$ban->id}}/news/{{$news->id}}">{{$news->title}}</a>
          @endforeach
        </div>
      </div>
      <hr>
    </div>
    @endforeach
  </div>
</div>
@endsection