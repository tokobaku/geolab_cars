@extends('layouts.starter')

@section('title', 'Admin Panel')

@section('page_header', 'Create New Slide')

@section('active_field', 'slides')

@section('content')
@if ($errors->any())
	@foreach($errors->all() as $error)
		<p style="color: red;">{{ $error }}</p>
	@endforeach
@endif
	<form action="/admin/slides/" method="POST" enctype="multipart/form-data">
		@csrf

		<input type="text" name="title" value="{{ old('title') }}" required><br>
		<input type="date" name="date" required><br>
		Select photo for slide: <input type="file" name="file" required style="display: inline-block;"><br>
		<input type="submit" name="submit" value="Create">
	</form>
@endsection