@extends('layouts.app')


@section('content')
<div class="card">
  <div class="card-header bg-primary text-light">Banners</div>
  <div class="card-body">
    @foreach($banners as $ban)
    <ul style="list-style-type: none;">
      <li>
        <img src="{{$ban->banner_img_path}}" width="300" height="200">
      </li>
      <li>
        <label for="cars">Choose a newspaper:</label>

        <select id="newspapers">
          <option value="">{{$ban->title}}</option>

        </select>
      </li>
    </ul>
    @endforeach

  </div>
</div>



@endsection
