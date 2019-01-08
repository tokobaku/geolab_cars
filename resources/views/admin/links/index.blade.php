@extends('layouts.starter')

@section('title', 'Admin Panel')

@section('page_header', 'All Social Links')

@section('active_field', 'links')

@section('content')
	<ul>
		@foreach($links as $link)
			<li style="margin-bottom: 20px;">
				<a href="/admin/links/{{ $link->id }}">
					{{ $link->name }}<br>
					<img src="{{ asset($link->img) }}" style="width: 100px;" />
				</a>
			</li>
		@endforeach
	</ul>
@endsection