@extends('layouts.starter')

@section('title', 'Admin Panel')

@section('page_header', $service->title)

@section('active_field', 'services')

@section('content')
	<img src="{{ asset($service->img) }}" width="200px">
	<a href="/admin/services/{{ $service->id }}/edit">
		<button style="display: block; margin-top: 10px">Edit</button>
	</a>
@endsection