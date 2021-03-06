@extends('layouts.app')
 
@section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Administrador de Usuarios</h2>
	        </div>

	        <div class="pull-right">
	     @permission('Crear_Usuarios')
	     <a class="btn btn-success" href="{{ route('users.create') }}"> Crear nuevo usuario</a> @endpermission
	        </div>
	    </div>

	</div>
	@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{ $message }}</p>
		</div>
	@endif
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Nombre</th>
			<th>Email</th>
			<th>Rol</th>
			<th width="280px">Acción</th>
		</tr>
	@foreach ($data as $key => $user)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $user->name }}</td>
		<td>{{ $user->email }}</td>
		<td>
			@if(!empty($user->roles))
				@foreach($user->roles as $v)
					<label class="label label-success">{{ $v->display_name }}</label>
				@endforeach
			@endif
		</td>
		<td>
		  @permission('Mostrar_Usuarios')
		  	<a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Mostrar</a>
           @endpermission
		  		@permission('Editar_Usuarios')
			<a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Editar</a>
               @endpermission
				@permission('Eliminar_Usuarios')
			{!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
        	{!! Form::close() !!}
        	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $data->render() !!}
@endsection