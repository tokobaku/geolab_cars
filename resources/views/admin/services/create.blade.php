<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
</head>
<body>
	<form action="/admin/services/" method="POST">
		@csrf

		<input type="text" name="title" value="{{ old('title') }}" required><br>
		<input type="text" name="img" value="{{ old('img') }}" required><br>
		<input type="submit" name="submit" value="Create">
	</form>
</body>
</html>