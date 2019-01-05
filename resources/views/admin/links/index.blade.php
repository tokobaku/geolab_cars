<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
</head>
<body>
	<ul>
		@foreach($links as $link)
			<li>
				<a href="/admin/links/{{ $link->id }}">{{ $link->name }}</a>
			</li>
		@endforeach
	</ul>
</body>
</html>