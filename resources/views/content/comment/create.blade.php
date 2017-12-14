@extends('layout.layout')
@section('title')
Tambah Komentar
@endsection

@section('content')
<div class="container">
	<h1>Tambah Komentar</h1>
	<hr>
	<div class="row">
		<div class="col-sm-8 offset-sm-2">
			{{ Form::open(array('route' => 'comment.store')) }}
				<div class="form-group">
					{{ Form::label('users_id', 'Pilih User', array('class' => 'label')) }}	
					<select name="users_id" class="form-control">
						@foreach($user as $row)
							<option value="{{ $row->id }}">{{ $row->name }}</option>
						@endforeach
					</select>
				</div>

				<div class="form-group">
					{{ Form::label('comment', 'Komentar', array('class' => 'label')) }}	
					{{ Form::textarea('comment', null, array('class' => 'form-control', 'placeholder' => 'Komentar anda', 'rows' => '10')) }}
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