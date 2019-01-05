<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
</head>
<body>
	<li>
		@foreach($subscribers as $subscriber)
			<li>
				<h1>{{ $subscriber->name }}</h1>
				<h2>{{ $subscriber->mail }}</h2>
				<p>{{ $subscriber->created_at }}</p>
			</li>
		@endforeach
	</li>
</body>
</html>