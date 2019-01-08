@extends('layouts.starter')

@section('title', 'Admin Panel')

@section('page_header', 'All Services')

@section('active_field', 'services')

@section('content')
	<a href="/admin/services/create">
		<button>Create New</button>
	</a>
	<ul>
		@foreach($services as $service)
			<li style="padding: 10px;">
				<a href="/admin/services/{{ $service->id }}">
					{{ $service->title }}<br>
					<img src="{{ asset($service->img) }}" width="200px">
				</a>
			</li>
		@endforeach
	</ul>
@endsection