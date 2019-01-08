@extends('layouts.starter')

@section('title', 'Admin Panel')

@section('page_header', 'Edit Serivice')

@section('active_field', 'services')

@section('content')
@foreach($errors->all() as $error)
	<p style="color: red;">{{ $error }}</p>
@endforeach
	<form action="/admin/services/{{ $service->id }}" method="POST" enctype="multipart/form-data">
		@csrf
		@method('PATCH')

		<input type="text" name="title" value="{{ old('title') == null ? $service->title : old('title') }}" required><br>
		Select photo for service: <input type="file" name="file" style="display: inline-block;"><br>
		<input type="submit" name="submit"  value="Save">
	</form>
	<br>
	<form action="/admin/services/{{ $service->id }}" method="POST">
		@csrf
		@method('DELETE')

		<input type="submit" name="submit" value="Delete">
	</form>
@endsection