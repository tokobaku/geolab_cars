<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
</head>
<body>
	<form action="/admin/services/{{ $service->id }}" method="POST">
		@csrf
		@method('PATCH')

		<input type="text" name="title" value="{{ $service->title }}" required><br>
		<input type="type" name="img" value="{{ $service->img }}" required><br>
		<input type="submit" name="submit"  value="Save">
	</form>
	<br>
	<form action="/admin/services/{{ $service->id }}" method="POST">
		@csrf
		@method('DELETE')

		<input type="submit" name="submit" value="Delete">
	</form>
</body>
</html>