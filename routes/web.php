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

Route::get('/','HomeController@index')->defaults('slug', '6');
Route::get('/home', 'HomeController@index')->defaults('slug', '6');

Route::get('/articles', 'HomeController@index')->defaults('slug', '2');



Route::get('/ajout','HomeController@getAllcategories');

Route::get('/parametresArticles', 'parametresController@getAllArticles');

Route::get('/parametresCategories', 'parametresController@getAllCategories');

Route::post('/ajouterCategories', 'parametresController@ajouterCategories');

Route::get('/DesignerAdmin', 'parametresController@designerAdmin');

Route::post('/DesignerAdmin', 'parametresController@searchUsers');


Route::post('/ajout','HomeController@insertarticle',function () {
    return view('ajoutArticle');}
);

Route::get('DeleteArticle/{id}','parametresController@deleteArticle');

Route::get('AccepterArticle/{id}','parametresController@accepterArticle');

Route::get('IgnorerArticle/{id}','parametresController@ignorerArticle');

Route::get('DeleteUser/{id}','parametresController@deleteUser');

Route::get('ChangerRole/{id}','parametresController@changerRole');


// Route::post('/ajout', function () {
//     $article = new App\Article;
//     $article->nom = request('nom');
    
//     return view('ajoutArticle');
// });


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

 Auth::routes(['verify' => true]);

// Route::get('/home', 'HomeController@index')->name('home');

Route::post('image-upload', 'ImageUploadController@imageUploadPost')->name('image.upload.post');
