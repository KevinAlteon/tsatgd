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
    return view('template');
});

Route::get('/home', function () {
    return view('template');
})->name("home");
Auth::routes();

Route::get('accueil','PagesController@accueil')->name("accueil");
Route::get('club','PagesController@club')->name("club");
Route::get('info-pratique','PagesController@infoPratique')->name("info-pratique");
Route::get('enseignement','PagesController@enseignement')->name("enseignement");
Route::get('competition','PagesController@competition')->name("competition");
Route::get('contact','PagesController@contact')->name("contact");


Route::get('liens_utiles','FrontController@liens_utiles')->name("liens_utiles");
Route::get('galerie','FrontController@galerie')->name("galerie");


//Route::resource('competitions', 'CompetitionController');

//Route::get('devenir_membre', 'InfosPratiquesController@devenir_membre')->name("devenir_membre");

// Routes pour le Back-office
<<<<<<< HEAD
Route::group(['prefix' => 'admin','middleware'=>'auth'], function() {
=======
Route::group(['prefix' => 'admin','middleware'=>'admin'], function() {
>>>>>>> c98bc0f13ffc654b3d91cb69ca913a306c709305

    Route::get('/laravel-filemanager', '\Unisharp\Laravelfilemanager\controllers\LfmController@show');

    Route::get('/', function () {
                return view('admin.page.dashboard');
            })
            ->name('admin.dashboard');
    Route::get('dashboard', function () {
        route('admin.dashboard');
    });

    // Galerie
    Route::get('photo/create/{album_id}', 'PhotoController@create')->name('photo.create')->where('album_id', '[0-9]+');
    Route::post('photo', 'PhotoController@store')->name('photo.store');
    Route::get('photo/banque', 'PhotoController@banque')->name('photo.banque');
    Route::delete('photo/{id}', 'PhotoController@destroy')->name('photo.destroy')->where('id', '[0-9]+');
    //Route::resource('photo', 'PhotoController');
    Route::resource('album', 'AlbumController');
    Route::resource('partenaire', 'PartenaireController');

    // Utilisateurs / Profil
    //
    Route::resource('user', 'UserController');

    Route::post('info-pratique','UserController@storeFront')->name("user.storeFront");

    // Documents
    //
    Route::resource('document','DocumentController');

    // Articles
    //
    Route::resource('news', 'NewsController');

    // Equipes et Rencontres
    //
    Route::resource('equipe', 'EquipeController');
    Route::resource('rencontre', 'RencontreController');
    Route::get('rencontre/index/{id}', 'RencontreController@index')->name('rencontre.index')->where('id', '[0-9]+');
    Route::get('rencontre/createR/{id}', 'RencontreController@createR')->name('rencontre.createR')->where('id', '[0-9]+');
    Route::get('rencontre/convoquer/{id}', 'RencontreController@convoquer')->name('rencontre.convoquer')->where('id', '[0-9]+');
    Route::post('rencontre/convoquerstore/{id}', 'RencontreController@convoquerstore')->name('rencontre.convoquerstore');

    // Coordonnees
    //
    Route::resource('coordonnee', 'CoordonneeController');
    Route::post('coordonnee/addUserStatut/{id}', 'CoordonneeController@addUserStatut')->name('add_user_statut');
    Route::delete('coordonnee/deleteStatut/{id}', 'CoordonneeController@deleteStatut')->name('deleteStatut');

    // Menu
    //
    Route::resource('contenu', 'ContenuController');
    Route::get('contenu/edit/{id_page}', 'ContenuController@edit')->name('contenu.edit');

    // Message
    //
    Route::resource('message', 'MessageController');


});
