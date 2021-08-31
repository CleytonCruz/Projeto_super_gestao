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

Route::get('/'          ,'PrincipalController@Principal')->name('site.index'    );
Route::get('/sobre-nos' ,'SobreNosController@SobreNos'  )->name('site.sobrenos' );
Route::get('/contato'   ,'ContatoController@Contato'    )->name('site.contato'  );
Route::get('/login'     , function(){return 'Login';}   )->name('site.login'    );

Route::prefix('/app')->group(function(){
    Route::get('/clientes',     function(){return 'clientes'    ; })->name('app.clientes');
    Route::get('/fornecedores', function(){return 'fornecedores'; })->name('app.fornecedores');
    Route::get('/produtos',     function(){return 'produtos'    ; })->name('app.produtos');
});





// Route::get('/contato/{nome}/{categoria_id}', //
//         function(string $nome,
//                  int $categoria_id=1 ){
//                      echo 'Estamos aqui:'.$nome.'-'.$categoria_id;
//         }
// )->where('categoria_id','[0-9]+')->where('nome','[A-Za-z]+');


/*
Verbo HTTP
get
post
put
patch
delete
options

*/
