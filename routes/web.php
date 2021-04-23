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
/*
Route::get('/', function () {
    return 'opa send salve';
});
*/

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'Principal'])->name('site.doort');
Route::get('/Contato', [\App\Http\Controllers\ContatoController::class, 'Contato'])->name('site.contato');
Route::get('/Sobrenos', [\App\Http\Controllers\SobrenosController::class, 'Sobrenos'])->name('site.sobrenos');
Route::get('/login', function (){return 'login';})->name('site.login');


Route::prefix('/app')->group(function (){
    Route::get('/clientes', function (){return 'produtos';})->name('app.clientes');
    Route::get('/fornecedores', [\App\Http\Controllers\FornecedoresController::class, 'index'])->name('app.fornecedores');
    Route::get('/produtos', function (){return 'produtos';})->name('app.produtos');
});

Route::get('/teste/{P1}/{P2}', [\App\Http\Controllers\TesteController::class, 'teste'])->name('testezao');

//Route::redirect('rota2','rota1');

Route::fallback(function() {
    echo 'acessou a rota errada meu consagrado. <a href="'.route('site.doort').'">aperta aqui</a> que eu te mando pra pagina inicial' ;
});