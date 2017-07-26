@extends('master_admin')

@section('contenido')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Login</div>
				<div panel-body>
					<form class="form-horizontal" role="form"
						method="POST"
						action="{{ url('/login')}}">
						{!!csrf_field()!!}
						<div class="form-group{{ $errors->has('correo_electronico') ? 'has-error' : '' }}">
							<label class="col-md-4 control-label">Correo Electronico:</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{old('email')}}">
								<!--@if (@errors->has('email'))
									<span class="help-block">
										<strong>{{$errors->first('email')}}</strong>
									</span>
								@endif-->
							</div>
						</div>
						<div class="form-group{{ $errors->has('contraseña') ? 'has-error' : '' }}">
							<label class="col-md-4 control-label">Contraseña:</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password" value="{{old('email')}}">
								<!--@if (@errors->has('password'))
									<span class="help-block">
										<strong>{{$errors->first('password')}}</strong>
									</span>
								@endif-->
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@stop