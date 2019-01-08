@extends('layouts.starter')

@section('title', 'Admin Panel')

@section('page_header', 'All Slides')

@section('active_field', 'slides')

@section('content')
	<a href="/admin/slides/create">
		<button>Create New</button>
	</a>
	<ul>
		@foreach($slides as $slide)
			<li style="margin: 10px">
				<a href="/admin/slides/{{ $slide->id }}">
				{{ $slide->title }}
				<img src="{{ asset($slide->img) }}" width="100" />
				</a>
			</li>
		@endforeach
	</ul>
@endsection