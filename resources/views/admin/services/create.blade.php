@extends('layouts.starter')

@section('title', 'Admin Panel')

@section('page_header', 'Create New Service')

@section('active_field', 'services')

@section('content')
	@foreach($errors->all() as $error)
		<p style="color: red;">{{ $error }}</p>
	@endforeach
	<form action="/admin/services/" method="POST" enctype="multipart/form-data">
		@csrf

		<input type="text" name="title" value="{{ old('title') }}" required><br>
		Select photo for service: <input type="file" name="file" required style="display: inline-block;"><br>
		<input type="submit" name="submit" value="Create">
	</form>
@endsection