<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Comments;

Route::get('/', function(){
	//factory(App\Comments::class, 5)->create();
	$comments = Comments::paginate(5);
	//dd(Comments::where('id', 9)->first());
	return view('homepage', ['comments' => $comments]);
});

/*Route::get('/', function(){

	
	$users = collect(
		[
			[
				'id' => 1,
				'name' => 'John',
				'status' => 'ban'
			],
			[
				'id' => 2,
				'name' => 'Jane',
				'status' => 'ban'
			],
			[
				'id' => 3,
				'name' => 'Misha',
				'status' => 'ban'
			],
			[
				'id' => 4,
				'name' => 'Petya',
				'status' => 'active'
			],
		]
	);

	$names = $users->map(function($user){
		return $user['name'];
	});

	$bannedUser = $users->filter(function($user){
		return $user['status'] == 'ban';
	});

	$bannedUserIdMoreThanOne = $users->filter(function($user){
		return $user['status'] == 'ban';
	})->filter(function($user){
		return $user['id'] > 1;
	});

	dd($bannedUserIdMoreThanOne);
	return view('homepage');
});

*/



/*
Route::middleware('admin')->group(function(){
	Route::get('/', 'MainController@index');
});




Route::get('/', function(){
	abort(503);
});
*/



Route::post( '/addcomment', 'MainController@addcomment');

