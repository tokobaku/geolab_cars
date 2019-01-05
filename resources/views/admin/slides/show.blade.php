<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
</head>
<body>
	<a href="/admin/slides/{{ $slide->id }}/edit">Edit</a>
	<br>
	<h1>{{ $slide->title }}</h1>
	<br>
	<p>{{ $slide->img }}</p>
	<br>
	<p>{{ DateTime::createFromFormat("Y-m-d H:i:s", $slide->date)->format("d.m.") }}</p>
</body>
</html>