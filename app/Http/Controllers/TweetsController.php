<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Tweet;
use Validator;
class TweetsController extends Controller
{
  public function index() {

    $tweets = Tweet::orderBy('id')->get();

  return view('tweets.index', [
    'tweets' => $tweets
  ]);
}

public function destroy($tweetID) {

    $tweet = Tweet::find($tweetID);
    $tweet->delete();

  return redirect('/')
  ->with('successStatus', 'Tweet was successfully deleted!');
}



    public function view($tweetID) {

        $tweet = Tweet::find($tweetID);
        return view('tweets.view', [
            'tweet' => $tweet
        ]);
    }

    public function edit($tweetID) {
        // with Eloquent:
        $tweet = Tweet::find($tweetID);
        return view('tweets.edit', [
            'tweet' => $tweet
        ]);
    }

    public function update($tweetID) {

        $validation = Validator::make([
            'tweet' => request('tweet')
                ],[
            'tweet' => 'required|max:140'
        ]);

        if($validation->passes()) {
            $tweet = Tweet::find($tweetID);
            $tweet->tweet = request('tweet');
            $tweet->save();
            return redirect('/')
            ->with('successStatus', 'Tweet was successfully edited!');
        }
        else {
            return redirect("/tweets/$tweetID/edit")
            ->withInput()
            ->withErrors($validation);
        }
    }
    public function store(Request $request) {
    	$validation = Validator::make($request->all(), [
    		'tweet' => 'required|max:140'
    	]);

    	if($validation->passes()) {

            $tweet = new Tweet();
            $tweet->tweet = request('tweet');
            $tweet->save();

			return redirect('/')
				->with('successStatus', 'Tweet was created successfully!');
    	}
    	else {
    		return redirect('/')
            ->withInput() // to accommodate for old input
    		->withErrors($validation);
    	}
    }
}
