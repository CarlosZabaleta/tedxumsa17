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

Route::get('/', 'HomeController@index');

Route::get('about',function(){return view ('about');});

Route::get('aliados','AliadoController@index');
Route::get('expositores','SpeakerController@index');

Route::get('equipo',function(){return view ('equipo');});
Route::get('participar',function(){return view ('participar');});

Route::group(['middleware' => 'auth'], function () {
       Route::get('/admin', function ()    {
       	return view('adminlte::home');
       // Uses Auth Middleware
   });

});

Use App\Tag;
Use App\Post;
Route::get('test',function ()
{
	$t=Post::find(1)->tags()->get()->toArray();
	dd($t);
});

/**post **/
Route::resource('posts','PostController');
//Route::get('blog',function(){return view ('blog');});
//Route::resource('blog','BlogController');
Route::get('/posts/tag/{tag}','TagController@index');
Route::post('/posts/{post}/comments','CommentController@store');
    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes

Route::get('lista_aliados','AliadoController@lista_aliados')->name('lista_aliados');
Route::get('aliado/{idAliado?}','AliadoController@aliado')->name('aliado');
Route::get('eliminar_aliado/{idAliado}','AliadoController@eliminar_aliado')->name('eliminar_aliado');
Route::post('aliado/{idAliado?}','AliadoController@aliado')->name('aliado');

Route::get('lista_posts','PostController@lista_posts')->name('lista_posts');
Route::get('post/{idPost?}','PostController@post')->name('post');
Route::post('post/{idPost?}','PostController@post')->name('post');
Route::get('eliminar_post/{idPost}','PostController@eliminar_post')->name('eliminar_post');


 //Route::get('list_tags','PostController@lista_posts')->name('list_tags');
// Route::get('tag/{idTag?}','PostController@post')->name('post');
// Route::post('post/{idPost?}','PostController@post')->name('post');
// Route::get('eliminar_post/{idPost}','PostController@eliminar_post')->name('eliminar_post');

// /****************Rutas Speakers**********************************************/
Route::get('list_speakers', 'SpeakerController@list_speaker')->name('list_speakers');
Route::get('speaker', 'SpeakerController@create')->name('speaker');
Route::post('speaker', 'SpeakerController@store')->name('speaker');
Route::get('/error',function(){
	return view('error');
});
Route::get('edit_speaker/{idSpeaker}', 'SpeakerController@edit');
Route::post('update_speaker/{idSpeaker}','SpeakerController@update')->name('update_speaker');
Route::get('eliminar_speaker/{idSpeaker}','SpeakerController@eliminar')->name('eliminar_speaker');


//***tags***************
Route::get('list_tags', 'TagController@list_tags')->name('list_tags');
Route::get('create_tag', 'TagController@create')->name('create_tag');
Route::post('store_tag', 'TagController@store')->name('store_tag');

Route::get('delete_tag/{idTag}','TagController@destroy')->name('delete_tag');
Route::get('edit_tag/{idTag}','TagController@edit');
Route::post('update_tag/{idTag}','TagController@update')->name('update_tag');


// Route::get('speaker', 'SpeakerController@create')->name('speaker');
// Route::post('speaker', 'SpeakerController@store')->name('speaker');

// Rutas de Vero!
// Route::group(['prefix' => 'administrador'], function(){
//     Route::get('/', function(){
//         return view('adminwelcome');
//     });
//     Route::resource('posts', 'PostsController');
//     Route::resource('expositores', 'ExpositorController');
//     Route::resource('auspiciadores', 'AuspiciadorController');
//     Route::resource('etiquetas', 'EtiquetaController');
// });
