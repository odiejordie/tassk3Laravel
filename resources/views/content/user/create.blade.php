@extends('layout.layout')
@section('title')
Tambah User
@endsection

@section('content')
<div class="container">
	<h1>Tambah User</h1>
	<hr>
	<div class="row">
		<div class="col-sm-8 offset-sm-2">
			{{ Form::open(array('route' => 'user.store')) }}
				<div class="form-group">
					{{ Form::label('name', 'Nama', array('class' => 'label')) }}	
					{{ Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Nama anda')) }}
				</div>
				<div class="form-group">
					{{ Form::label('email', 'Email', array('class' => 'label')) }}	
					{{ Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'Email anda')) }}
				</div>
				<div class="form-group">
					{{ Form::label('password', 'Password', array('class' => 'label')) }}	
					{{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password anda')) }}
				</div>
				<hr>
				{{ Form::submit('Tambah', array('class' => 'btn btn-success btn-block btn-lg')) }}
			{{ Form::close() }}		
		</div>
	</div>
	<hr>
	{{ link_to(url('/'), 'Kembali', array('class' => 'btn btn-danger btn-block btn-lg')) }}
</div>
@endsection