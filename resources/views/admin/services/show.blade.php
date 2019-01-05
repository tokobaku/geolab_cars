<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
</head>
<body>
	<a href="/admin/services/{{ $service->id }}/edit">Edit</a>
	<br>
	<h1>{{ $service->title }}</h1>
	<br>
	<p>{{ $service->img }}</p>
</body>
</html>