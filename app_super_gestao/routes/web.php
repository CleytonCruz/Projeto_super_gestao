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
    Route::get('/fornecedores','FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos',     function(){return 'produtos'    ; })->name('app.produtos');
});

Route::get('/rota1',     function(){
    echo "rota1"; 
})->name('rota1');// redireciona as rotas

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');//passa os parametros para o controlador


route ::fallback(function(){//para paginas nao encontradas
    echo 'a rota acessada nao existe. <a href="'.route('site.index').'">clique aqui</a> para ir a pagina inicial';
});

//Route::redirect('rota2','rota1');// redireciona a rota


// Route::get('/contato/{nome}/{categoria_id}', //
//         function(string $nome,
//                  int $categoria_id=1 ){
//                      echo 'Estamos aqui:'.$nome.'-'.$categoria_id;
//         }
// )->where('categoria_id','[0-9]+')->where('nome','[A-Za-z]+');



//Route::get('/rota2',     function(){
 //   return redirect()->route('rota1');
//})->name('rota2');

/*
Verbo HTTP
get
post
put
patch
delete
options

*/
