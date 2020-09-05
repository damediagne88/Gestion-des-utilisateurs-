@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editer - L' {{ $user->name}} </div>

                <div class="card-body">

                <form class="form-horizontal" action="{{ route('admin.users.update',$user)}}" method="Post">
                    <fieldset>
                    @csrf
                    @method('PATCH')
                        <div class="form-group">
                        @foreach($roles as $role)

                        <div class="col-lg-10">
                        <div class="radio">
                        <input type="checkbox" name="roles[]"  value="{{$role->id}}" id="{{ $role->id}}" 
                        @foreach($user->roles as $userRole)
                         @if($userRole->id == $role->id)
                            checked
                         @endif
                    
                          @endforeach>        
                        <label> {{$role->name}}</label>
                        </div>
                        </div>

                        @endforeach
                        </div>
                        
                        <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="submit" class="btn btn-primary">Modifier</button>
                        </div>
                        </div>
                    </fieldset>
            </form>
                    


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
