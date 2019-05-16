@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="card card-default">
                <div class="card-header">
                	Roles
                    @can('roles.create')
                        <a href="{{ route('roles.create') }}" class="btn btn-primary float-right btn-sm">Crear</a>
                    @endcan
            	</div>

                <div class="card-body">
                	<table class="table table-striped table-hover">
                		<thead>
                			<tr>
                				<th width="10px">Id</th>
                				<th>Nombre</th>
                				<th colspan="3"></th>
                			</tr>
                		</thead>
                		<tbody>
                			@foreach($roles as $role)
                				<tr>
                					<td>{{$role->id}}</td>
                					<td>{{$role->name}}</td>

                					<td width="10px">
                					@can('roles.show')
                					<a href="{{ route('roles.show',$role->id)}}" class="btn btn-primary">Ver</a>
                					@endcan
                					</td>

                                    <td width="10px">
                                    @can('roles.edit')
                                    <a href="{{ route('roles.edit',$role->id)}}" class="btn btn-primary">Editar</a>
                                    @endcan
                                    </td>

                                    <td width="10px">
                                    @can('roles.destroy')
                                        {!! Form::open(['route' => ['roles.destroy',$role->id],
                                        'method' => 'DELETE']) !!}

                                        <button class="btn btn-primary">Eliminar</button>

                                        {!! FORM::close()!!}
                                    @endcan
                                    </td>                                                                        

                				</tr>
                			@endforeach
                		</tbody>
                		
                	</table>
                    {{$roles->render()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
