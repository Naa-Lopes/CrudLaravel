<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaController;
use App\Models\Pessoa;

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

Route::get('/cadastrar', function () {
    return view('cadastrar');
});

Route::post('/cadastro-pessoas', [PessoaController::class, 'store']);

Route::get('/listar', [PessoaController::class, 'listarpessoas']);

Route::get('/editar/{id}',function($id){

    $pessoa = Pessoa::find($id);
    return view('editar', ['pessoa' => $pessoa]);
});

Route::post('/editar-pessoa/{id}',[PessoaController::class, 'update']);

Route::get('/excluir/{id}',function($id){
    //dd($request->all());

    $pessoa = Pessoa::find($id);
    $pessoa->delete();

    echo '<alert>Cadastro excluído com sucesso!</alert>';
    echo '<br><br><a href="/listar">voltar para Lista</a>';
    echo '<br><br><a href="/">voltar para Início</a>';
});




