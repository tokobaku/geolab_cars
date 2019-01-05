<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
</head>
<body>
	<form action="/admin/slides/{{ $slide->id }}" method="POST">
		@csrf
		@method('PATCH')

		<input type="text" name="title" value="{{ $slide->title }}" required><br>
		<input type="type" name="img" value="{{ $slide->img }}" required><br>
		<input type="date" name="date" value="{{ DateTime::createFromFormat("Y-m-d H:i:s", $slide->date)->format("Y-m-d") }}" required><br>
		<input type="submit" name="submit"  value="Save">
	</form>
	<br>
	<form action="/admin/slides/{{ $slide->id }}" method="POST">
		@csrf
		@method('DELETE')

		<input type="submit" name="submit" value="Delete">
	</form>
</body>
</html>