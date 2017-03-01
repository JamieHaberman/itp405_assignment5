<!DOCTYPE html>
<html>
	<head>
		<title>Tweets</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	</head>
	<body>

			<h1> Twitter Clone</h1>
			<br><br>
				{{$tweet->tweet}}

				<a href="/tweets/{{$tweet->id}}/edit">Edit</a>

		</div>
	</body>
</html>
