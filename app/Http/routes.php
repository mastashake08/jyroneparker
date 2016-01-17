<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	return view('spark::welcome');
});

Route::get('sitemap', function(){

    // create new sitemap object
    $sitemap = App::make("sitemap");

    // set cache key (string), duration in minutes (Carbon|Datetime|int), turn on/off (boolean)
    // by default cache is disabled
    $sitemap->setCache('laravel.sitemap', 60);

    // check if there is cached sitemap and build new only if is not
    if (!$sitemap->isCached())
    {
         // add item to the sitemap (url, date, priority, freq)
         $sitemap->add(URL::to('/'), '2012-08-25T20:10:00+02:00', '1.0', 'daily');
				 $sitemap->add(URL::to('home'), '2012-08-25T20:10:00+02:00', '1.0', 'daily');

         // get all posts from db
         $posts = DB::table('posts')->orderBy('published_at', 'desc')->get();

         // add every post to the sitemap
         foreach ($posts as $post)
         {
            $sitemap->add($post->slug, $post->updated_at, '1.0', 'daily');
         }
    }

    // show your sitemap (options: 'xml' (default), 'html', 'txt', 'ror-rss', 'ror-rdf')
		//$sitemap->store('xml', 'sitemap');
		return $sitemap->render('xml');

});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


Route::group(['middleware' => 'web'], function () {
	  Route::get('posts/{slug}','PostController@getPost');

    Route::get('home', ['middleware' => 'auth', 'uses' => 'PostController@index']);
});
