@extends('layouts.starter')

@section('title', 'Admin Panel')

@section('active_field', 'subscribers')

@section('content')
	<style>
		table {
		  font-family: arial, sans-serif;
		  border-collapse: collapse;
		  width: 100%;
		}

		td, th {
		  border: 1px solid #dddddd;
		  text-align: left;
		  padding: 8px;
		}

		tr:nth-child(even) {
		  background-color: #dddddd;
		}
	</style>
	<table>
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Subscription time</th>
		</tr>
		@foreach($subscribers as $subscriber)
			<tr>
				<th>{{ $subscriber->name }}</th>
				<th>{{ $subscriber->mail }}</th>
				<th>{{ $subscriber->created_at }}</th>
			</tr>
		@endforeach
	</table>
@endsection