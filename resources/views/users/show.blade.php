@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="card card-default">
                <div class="card-header">Usuarios</div>
                <div class="card-body">
                	<p><strong>Nombre</strong> {{$user->name}} </p>
                	<p><strong>Email</strong> {{$user->email}} </p>                	
                </div>
            </div>
        </div>
    </div>
</div>  
@endsection      