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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('welcome');
});



Route::get('/articles', function () {
    return view('articles');
});

Route::get('/ajout', function () {
    return view('ajoutArticle');
});

Route::get('/parametres', function () {
    return view('parametres');
});


Route::post('/ajout', function () {
    return 'Votre nom  est ' . $_POST['nom'];
});

// Route::post('/ajout', function () {
//     $article = new App\Article;
//     $article->nom = request('nom');
    
//     return view('ajoutArticle');
// });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::post('image-upload', 'ImageUploadController@imageUploadPost')->name('image.upload.post');
