@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Liste des Utilisateurs </div>

                <div class="card-body">

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Nom </th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($users as $user)
                        <tr>
                        <td> {{ $user->name }}</td>  
                        <td> {{ $user->email }}</td> 
                        <td> 
                        <a href="{{ route('admin.users.edit',$user)}}"><button class="btn btn-primary">Editer</button></a>
                        <a href="{{ route ('admin.users.destroy',$user) }}"><button class="btn btn-warning">Supprimer</button></a>
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
</div>
@endsection
