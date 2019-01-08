@extends('layouts.starter')

@section('title', 'Admin Panel')

@section('page_header', 'Edit Slide')

@section('active_field', 'slides')

@section('content')
	@foreach($errors->all() as $e)
		<p style="color: red;">{{ $e }}</p><br>
	@endforeach
	<form action="/admin/slides/{{ $slide->id }}" method="POST" enctype="multipart/form-data">
		@csrf
		@method('PATCH')

		<input type="text" name="title" placeholder="slide title..." value="{{ $slide->title }}" required><br>
		<input type="date" name="date" value="{{ DateTime::createFromFormat("Y-m-d H:i:s", $slide->date)->format("Y-m-d") }}" required><br>
		Select photo for slide <input type="file" name="file" style="display: inline-block;"><br>
		<input type="submit" name="submit"  value="Save">
	</form>
	<br>
	<form action="/admin/slides/{{ $slide->id }}" method="POST">
		@csrf
		@method('DELETE')

		<input type="submit" name="submit" value="Delete">
	</form>
@endsection