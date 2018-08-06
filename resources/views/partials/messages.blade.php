@if (count($errors)>0)
	<div class='alert alert-danger' roler='alert'>
		<strong>Errores al ingresar datos:</strong>
		<ul>
			@foreach($errors->all() as $error)
				<li>{{$error}} </li>
			@endforeach
		</ul>

	</div>

@endif

@if (Session::has('update'))
	<div class="alert alert-success" role='alert'>
		<strong>{{Session::get('update')}}</strong>
	</div>
@endif

@if (Session::has('delete'))
	<div id="bbb" class="alert alert-danger" role='alert'>
		<strong>{{Session::get('delete')}}</strong>
	</div>
@endif


@if (Session::has('save'))
	<div id="bb" class="alert alert-success" role='alert'>
		<strong>{{Session::get('save')}}</strong>
	</div>
@endif




@if (Session::has('prueba'))
	<div class="alert alert-success" role='alert'>
		<strong>saasassdasaaaas</strong>
	</div>
@endif

