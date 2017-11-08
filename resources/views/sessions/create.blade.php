@extends ('layouts.master')

@section ('content')
	<div class="col-sm-8">
		<h1>Register</h1>
		<form>
			{{ csrf_field() }}
			<div class="form-group">
				<label for=name>Name:</label>
				<input type="text" class="form-control" id="name" name="name">
			</div>
			<div class="form-group">
				<label for=email>E-mail:</label>
				<input type="email" class="form-control" id="email" name="email">
			</div>
			<div class="form-group">
				<label for=password>Password:</label>
				<input type="email" class="form-control" id="password" name="password">
			</div>
		</form>
	</div>
@endsection