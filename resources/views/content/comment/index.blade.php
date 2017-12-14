@extends('layout.layout')
@section('title')
Edit Komentar
@endsection

@section('content')
<div class="container">
	<h1>Komentar</h1>
	<hr>
	@foreach($komen as $row)
	<div class="card" style="width: 100%;">
	  	<div class="card-body">
		    <h4 class="card-title">{{ $row->user->name }}</h4>
		    <p class="card-text">{{ $row->comment }}</p>
		    {{ Form::open(array('route' => array('comment.destroy', $row->id), 'method' => 'delete')) }}
			    {{ Form::submit('Hapus', array('class' => 'btn btn-sm btn-secondary')) }}
			    {{ link_to(route('comment.edit', array($row->id)), 'Edit', array('class' => 'btn btn-secondary btn-sm')) }}
		    {{ Form::close() }}
	  	</div>
	</div>
	<hr>
	@endforeach
	{{ link_to(url('/'), 'Kembali', array('class' => 'btn btn-danger btn-block btn-lg')) }}
</div>
@endsection