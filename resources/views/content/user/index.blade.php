@extends('layout.layout')
@section('title')
List User
@endsection

@section('content')
<div class="container">
	<h1>List User</h1>
	<hr>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Nama</th>
				<th>Email</th>
				<th>Aksi</th>
			</tr>
		</thead>
		@foreach($user as $row)
		<tr>
			<td>{{ $row->name }}</td>
			<td>{{ $row->email }}</td>
			<td>
				{{ Form::open(array('route' => array('user.destroy', $row->id), 'method' => 'delete')) }}
					{{ link_to(route('user.edit', $row->id), 'Edit', array('class' => 'btn btn-secondary btn-sm')) }}
					{{ Form::submit('Delete', array('class' => 'btn btn-secondary btn-sm')) }}
				{{ Form::close() }}
			</td>
		</tr>
		@endforeach
	</table>
	<hr>
	{{ link_to(url('/'), 'Kembali', array('class' => 'btn btn-danger btn-block btn-lg')) }}
</div>
@endsection