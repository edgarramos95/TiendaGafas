@extends('master_admin')

@section('contenido')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Iniciar sesión</div>
				<div panel-body>
					<form class="form-horizontal" role="form"
						method="POST"
						action="{{ url('/login')}}">
						{!!csrf_field()!!}
						<div class="form-group{{ $errors->has('correo_electronico') ? 'has-error' : '' }}">
							<label class="col-md-4 control-label">Correo Electronico:</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="correo_electronico" value="{{old('correo_electronico')}}">
							</div>
						</div>
						<div class="form-group{{ $errors->has('contraseña') ? 'has-error' : '' }}">
							<label class="col-md-4 control-label">Contraseña:</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password" value="{{old('email')}}">
								
							</div>

						<div class="col-md-6">
							<a href="{{url('/admin')}}" class="btn btn-xs btn-primary">
							<span class="glyphicon glyphicon-ok" aria-hidden="true">Entrar</a>
						</div>
						</div>
        
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@stop