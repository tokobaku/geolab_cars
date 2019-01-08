@extends('layouts.starter')

@section('title', 'Admin Panel')

@section('page_header', $slide->title)

@section('active_field', 'slides')

@section('content')
	<p>Date: {{ DateTime::createFromFormat("Y-m-d H:i:s", $slide->date)->format("d.m.") }}</p>
	<br>
	<img src="{{ asset($slide->img) }}" height="100%">
	<a href="/admin/slides/{{ $slide->id }}/edit">
		<button style="display: block; margin-top: 10px">Edit</button>
	</a>
@endsection