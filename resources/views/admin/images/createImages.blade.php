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
                    <span>Ajouter une image</span>
                </div>

                <div class="card-body">
                    <form action="{{route('image.store')}}" enctype="multipart/form-data" method='post'>
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Ajoutez votre image</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="url">

                        </div>
                        <button type="submit">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection