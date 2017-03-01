<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TWEETWEET</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
    <div>
  			<h1>Twitter Clone</h1>

  			@if (session('successStatus'))
  				<div class="alert alert-success" role="alert">
  					{{session('successStatus')}}
  				</div>
  			@endif

  			@if (count($errors) > 0)
  				<div class="alert alert-success" role="alert">
  					@foreach ($errors->all() as $error)
  						{{$error}}
  					@endforeach
  				</div>
  			@endif

  			<form action="/" method="post">
  				{{csrf_field()}}
  				<textarea name="tweet" id="tweet"></textarea>
          <br>
  				<button type="submit">Submit your tweet</button>
          <br><br>
  			</form>

  			@foreach ($tweets as $tweet)
  			<div>
  				<a href="/tweets/{{$tweet->id}}/destroy">X</a>
  				<a href="/tweets/{{$tweet->id}}">View</a>
  				{{$tweet->tweet}}
  			</div>
  			@endforeach
  		</div>
  </body>
</html>
