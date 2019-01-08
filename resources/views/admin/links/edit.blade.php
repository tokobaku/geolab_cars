@extends('layouts.starter')

@section('title', 'Admin Panel')

@section('page_header', 'Edit Social Link')

@section('active_field', 'links')

@section('content')
	<a href="{{ $link->link }}">{{ $link->name }}</a>
	<img src="{{ asset($link->img) }}" style="width: 100px;" />
	<form action="/admin/links/{{ $link->id }}" method="POST" enctype="multipart/form-data">
		@csrf
		@method('PATCH')

		<input type="text" name="link" value="{{ $link->link }}" required><br>
		<input type="file" name="file"><br>
		<input type="submit" name="submit"  value="Save">
	</form>
@endsection