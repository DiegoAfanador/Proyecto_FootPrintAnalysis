@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="card header-default">
                <div class="card-header">Usuarios</div>
                <div class="card-body">
  					
  					{!! Form::model($user,['route' =>['users.update', $user->id],
  					'method' => 'PUT']) !!}

  					@include('users.partials.form')

  					{!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>  
@endsection  