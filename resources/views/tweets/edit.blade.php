<!DOCTYPE html>
<html>
	<head>
		<title>Tweets</title>

	</head>
	<body>

			<h1>Jamie's Twitter Clone</h1>

			@if (count($errors) > 0)
				<div role="alert">
					@foreach ($errors->all() as $error)
						{{$error}}
					@endforeach
				</div>
			@endif

			<form action="/tweets/{{$tweet->id}}/edit" method="post" style="margin-bottom: 80px">
				{{csrf_field()}}
				<textarea name="tweet" >
          @if (count($errors) > 0){{old('tweet')}}@else{{$tweet->tweet}}@endif
        </textarea>
				<button type="submit">Save!</button>
			</form>
		
	</body>
</html>
