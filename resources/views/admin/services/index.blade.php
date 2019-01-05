<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
</head>
<body>
	<a href="/admin/services/create">Create New</a>
	<ul>
		@foreach($services as $service)
			<li>
				<a href="/admin/services/{{ $service->id }}">{{ $service->title }}</a>
			</li>
		@endforeach
	</ul>
</body>
</html>