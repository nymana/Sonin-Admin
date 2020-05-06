@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <form action="{{route('newsfeed.update',$update->id)}}" method="post" enctype="multipart/form-data">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile01" name="image" aria-describedby="inputGroupFileAddon01">
                <label class="custom-file-label" for="inputGroupFile01">Зураг</label>
            </div>
            <hr>
            <div class="input-group mb-3">
                <input type="hidden" name="_method" value="PUT">

                <input type="text" class="form-control" placeholder="Title" aria-label="bodyText" name="title" value="{{ $update->title }}" aria-describedby="basic-addon1">
                    </input>
            </div>
            <hr>
            <div class="input-group mb-3">
                <input type="hidden" name="_method" value="PUT">
                <textarea type="text" class="form-control" placeholder="Body Text" aria-label="bodyText" name="description" rows="10" aria-describedby="basic-addon1">{{ $update->description }}
                    </textarea>
            </div>
            <div class="input-group mb-3">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="submit" class="btn btn-primary btn-lg btn-block" value="save">
            </div>
        </form>
    </div>
</div>
@endsection


