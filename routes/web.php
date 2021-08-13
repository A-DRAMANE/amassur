<?php

use Illuminate\Support\Facades\Route;




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


//Route de la    page d'accueil

Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/connexion', 'ConnexionController@index')->name('connexion');

//Routes ds articles

Route::get('/articles', 'ArticleController@index')->name('articles.index');
Route::get('/articles/{categorie}', 'ArticleController@parCategorie')->name('categorie');
Route::get('/articles/{categorie}/{article}','ArticleController@show')->name('articles.show');


//Routes de la page particuliers
Route::get('/particuliers','ParticulierController@index')->name('particulier');
 Route::get('/particuliers/{particulier}','ParticulierController@show')->name('particulier.show');


//Routes de la page professionnels
Route::get('/professionnels','ProfessionnelController@index')->name('professionnel');
Route::get('/professionnels/{professionnel}','ProfessionnelController@show')->name('professionnel.show');


//Routes comparateurs
Route::get('/comparateurs','ComparateurController@index')->name('comparateur');
Route::get('/comparateurs/{comparateur}','ComparateurController@show')->name('comparateurs.show');


//Routes de la page d'à-propos
Route::get('/a-propos','AboutController@index')->name('a-propos');




Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    
});
