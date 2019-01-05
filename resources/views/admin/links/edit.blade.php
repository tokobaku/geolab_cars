<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
</head>
<body>
	<form action="/admin/links/{{ $link->id }}" method="POST">
		@csrf
		@method('PATCH')

		<input type="text" name="name" value="{{ $link->name }}" required><br>
		<input type="text" name="link" value="{{ $link->link }}" required><br>
		<input type="type" name="img" value="{{ $link->img }}" required><br>
		<input type="submit" name="submit"  value="Save">
	</form>
</body>
</html>