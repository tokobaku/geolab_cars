<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
</head>
<body>
	<a href="/admin/slides/create">Create New</a>
	<ul>
		@foreach($slides as $slide)
			<li>
				<a href="/admin/slides/{{ $slide->id }}">{{ $slide->title }}</a>
			</li>
		@endforeach
	</ul>
</body>
</html>