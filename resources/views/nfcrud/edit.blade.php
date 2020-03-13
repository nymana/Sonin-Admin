@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <form action="{{route('newsfeed.update',$update->id)}}" method="post">
            <div class="input-group mb-3">
                <input type="hidden" name="_method" value="PUT">
                <input type="text" class="form-control" value="{{ $update->bodyText }}" placeholder="Body Text" aria-label="bodyText" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="submit" class="btn btn-primary btn-lg btn-block" value="save">
            </div>
        </form>
    </div>
</div>
@endsection
