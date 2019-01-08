@extends('layouts.starter')

@section('title', 'Admin Panel')

@section('page_header', 'Welcome')

@section('content')
    <h3>You have {{ $service_count }} services</h3><br>
    <h3>You have {{ $subscriber_count }} subscribers</h3>
@endsection