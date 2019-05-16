@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="card card-default">
                <div class="card-header">Rol</div>
                <div class="card-body">
                	<p><strong>Nombre</strong> {{$role->name}} </p>
                	<p><strong>Slug</strong> {{$role->slug}} </p>                	
                	<p><strong>descripcion</strong> {{$role->description}} </p>                	
                </div>
            </div>
        </div>
    </div>
</div>  
@endsection      