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
                    <span>{{$user->name . ' ' . $user->profil->prenom}}</span>

                </div>

                <div class="card-body">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Nom</th>
                                <th scope="col">Prenom</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td> {{$user->name}}</td>
                                <td> {{$user->profil->prenom}}</td>
                                <td> {{$user->email}}</td>
                                <td>
                                    <form action="{{route('user.destroy',$user->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>


                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection