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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/page/{cat}/{id}', function($id,$cat){
// 	echo '<pre>';
// 	echo $id.'|'.$cat;
// 	//print_r(env('NEW_PARAM'));
// 	//echo config('app.locale');
// 	//Config::set('app.locale','ru');
// 	//echo Config::get('app.locale');
// 	echo env('APP_ENV');

// 	echo '</pre>';

// });

// // Route::post('/comments',function(){
// // 	print_r($_POST);
// // });

// Route::get('/', function () {
//     return view('greeting', ['name' => 'Vadim']);
// })->name('home');

// Route::get('/article/{id}',function($id){
// 	echo $id;
// })->name('article');

// // Route::match(['post','get'],'/comments',function(){
// // 	print_r($_POST);
// // });

// // Route::any('/comments',function(){
// // 	print_r($_POST);
// // });

// Route::post('/comments',function(){
// 	print_r($_POST);
// });

// Route::group(['prefix'=>'admin/{id}'],function(){

// 	Route::get('page/create/{i}',function($i){
// 		$route = Route::current();

// 		//echo $route->getName();
// 		//echo $route->parameter('i',56);
// 		print_r($route->parameters());

// 		//return redirect()->route('article',['id'=>25]);
// 	})->name('createpage');

// 	Route::get('page/edit',function(){
// 		echo 'page/edit';
// 	});

// });


Route::get('/',['as'=>'home','uses'=>'Admin\IndexController@show']);

Route::get('/about',['uses'=>'Admin\AboutController@show','as'=>'about']);

//Route::get('/fan','Dir\TestController@show');


Route::get('/articles',['uses'=>'Admin\Core@getArticles','as'=>'articles']);
Route::get('/article/{id}',['uses'=>'Admin\Core@getArticle','as'=>'article']);

//list pages ['only'=>['index','show']] ['except'=>['index','show']]
// Route::get('pages/add','Admin\CoreResource@add');
// Route::resource('/pages','Admin\CoreResource');

// Route::get('/pages','PagesController@getIndex');