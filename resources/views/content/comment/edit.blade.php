@extends('layout.layout')
@section('title')
Edit Komentar
@endsection

@section('content')
<div class="container">
	<h1>Edit Komentar {{ $datauser->user->name }}</h1>
	<hr>
	<div class="row">
		<div class="col-sm-8 offset-sm-2">
			{{ Form::open(array('route' => array('comment.update', $datauser->id), 'method' => 'PUT')) }}
			<div class="form-group">
				{{ Form::label('comment', 'Komentar', array('class' => 'label')) }}	
				{{ Form::textarea('comment', $datauser->comment, array('class' => 'form-control')) }}
			</div>
			<div class="form-group">
				{{ Form::submit('Update', array('class' => 'btn btn-primary btn-block btn-lg')) }}
			</div>
			{{ Form::close() }}
		</div>
	</div>
	<hr>
	{{ link_to(route('comment.index'), 'Kembali', array('class' => 'btn btn-danger btn-block btn-lg')) }}
</div>
@endsection