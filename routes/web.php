<?php
use Illuminate\Support\Facades\Auth;
$us = auth()->user();
//echo($us);
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

Route::get('/','HomeController@index')->defaults('slug', '6')  ;

Route::get('/profil/{id}','HomeController@profil');
Route::get('/profil','HomeController@profile');


Route::get('/home', 'HomeController@index')->defaults('slug', '6')  ;

Route::get('/articles', 'HomeController@index')->defaults('slug','9')  ;


Route::get('/ajout','HomeController@getAllcategories');
// if(Auth::check() ){
//    dd(Auth::check());
Route::get('/parametresArticles', 'parametresController@getAllArticles')->middleware('auth');

Route::get('/parametresCategories', 'parametresController@getAllCategories')->middleware('auth');

Route::post('/ajouterCategories', 'parametresController@ajouterCategories')->middleware('auth');

Route::get('/DesignerAdmin', 'parametresController@designerAdmin')->middleware('auth');


Route::post('/DesignerAdmin', 'parametresController@searchUsers')->middleware('auth');


Route::get('DeleteArticle/{id}','parametresController@deleteArticle')->middleware('auth');

Route::get('AccepterArticle/{id}','parametresController@accepterArticle')->middleware('auth');

Route::get('IgnorerArticle/{id}','parametresController@ignorerArticle')->middleware('auth');

Route::get('DeleteUser/{id}','parametresController@deleteUser')->middleware('auth');

Route::get('ChangerRole/{id}','parametresController@changerRole')->middleware('auth');


// };

Route::post('/ajout','HomeController@insertarticle',function () {
    return view('ajoutArticle');}
);


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

Route::get('/searchHotel','HomeController@index')->defaults('slug', 'Hôtels')  ;


Route::get('/searchSalleDeSport','HomeController@index')->defaults('slug', 'Salle de sport')  ;


Route::get('/searchSalleDeFetes','HomeController@index')->defaults('slug', 'Salles des fêtes/congrès')  ;


Route::get('/searchImmobilier','HomeController@index')->defaults('slug', 'Immeubles')  ;


Route::get('/searchVoiture','HomeController@index')->defaults('slug', 'Voitures')  ;


Route::get('/searchAll','HomeController@index')->defaults('slug', 'all')  ;

Route::post('/search', 'HomeController@searchArticle');





                                                  
