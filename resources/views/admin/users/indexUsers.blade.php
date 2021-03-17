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
                    <span>Les utilisateurs</span>

                </div>

                <div class="card-body">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Prenom</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <th scope="row"> {{$user->id}}</th>
                                <td> {{$user->name}}</td>
                                <td> {{$user->profil->prenom}}</td>
                                <td> {{$user->email}}</td>
                                <td>
                                    <a href="{{route('user.show',$user->id)}}" class="btn btn-primary btn-sm">Show</a>
                                </td>
                            </tr>

                            @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection