@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">
            @include('layouts.navVertical')
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <span>Mes images</span>
                    <a class="btn btn-success float-right" href="{{route('image.create')}}">Add image</a>
                </div>

                <div class="card-body">

                    @foreach($images as $image)
                    @if($image->user_id == Auth::id())
                    <img src="{{asset('storage/'.$image->url)}}" alt="" class="img-fluid mb-3">
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection