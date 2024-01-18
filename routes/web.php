<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::get('/2', 'App\Http\Controllers\Website\WebsiteControllers@login2');

Route::get('/', 'App\Http\Controllers\Website\WebsiteControllers@login');
Route::get('/logout', 'App\Http\Controllers\Website\WebsiteControllers@logout');
Route::get('/homeusuario', 'App\Http\Controllers\Website\WebsiteControllers@homeusuario');
Route::get('/homeadm', 'App\Http\Controllers\Website\WebsiteControllers@homeadm');
Route::get('/Cadastro', 'App\Http\Controllers\Website\WebsiteControllers@cadastro');
Route::post('/cadastrar', 'App\Http\Controllers\Website\WebsiteControllers@cadastrar');
Route::post('/cadastrarCaixa', 'App\Http\Controllers\Website\WebsiteControllers@cadastrarCaixa');
Route::post('/cadastrarSensor', 'App\Http\Controllers\Website\WebsiteControllers@cadastrarSensor');
Route::post('/cadastrarApartamento', 'App\Http\Controllers\Website\WebsiteControllers@cadastrarApartamento');
Route::post('/cadastrarAndar', 'App\Http\Controllers\Website\WebsiteControllers@cadastrarAndar');
Route::post('/cadastrarBloco', 'App\Http\Controllers\Website\WebsiteControllers@cadastrarBloco');
Route::get('/Listar', 'App\Http\Controllers\Website\WebsiteControllers@listar');
Route::get('/ListarApartamento', 'App\Http\Controllers\Website\WebsiteControllers@listarapartamento');
Route::get('/ListarCaixa', 'App\Http\Controllers\Website\WebsiteControllers@listarcaixa');
Route::get('/ListarSensor', 'App\Http\Controllers\Website\WebsiteControllers@listarsensor');
Route::get('/ListarBloco', 'App\Http\Controllers\Website\WebsiteControllers@listarbloco');
Route::get('/ListarAndar', 'App\Http\Controllers\Website\WebsiteControllers@listarandar');
Route::post('/Logar', 'App\Http\Controllers\Website\WebsiteControllers@logar');
Route::get('/ConfirmEmail', 'App\Http\Controllers\Website\WebsiteControllers@redefinirSenha');
Route::post('/CodigoConfirm', 'App\Http\Controllers\Website\WebsiteControllers@codigoSeguranca');
Route::post('/RedefinirSenha', 'App\Http\Controllers\Website\WebsiteControllers@confirmarCodigo');
Route::post('/login', 'App\Http\Controllers\Website\WebsiteControllers@login2');
Route::get('/condomino', 'App\Http\Controllers\Website\WebsiteControllers@condominos');
Route::get('/apartamento', 'App\Http\Controllers\Website\WebsiteControllers@apartamento');
Route::get('/caixadagua', 'App\Http\Controllers\Website\WebsiteControllers@caixadagua');
Route::get('/sensor', 'App\Http\Controllers\Website\WebsiteControllers@sensor');
Route::get('/deletar', 'App\Http\Controllers\Website\WebsiteControllers@deletar');
Route::post('/salvarcondomino', 'App\Http\Controllers\Website\WebsiteControllers@salvarcondomino');
Route::post('/salvarapartamento', 'App\Http\Controllers\Website\WebsiteControllers@salvarapartamento');
Route::post('/salvarsensor', 'App\Http\Controllers\Website\WebsiteControllers@salvarsensor');
Route::post('/salvarcaixadagua', 'App\Http\Controllers\Website\WebsiteControllers@salvarcaixadagua');
Route::post('/editarDados', 'App\Http\Controllers\Website\WebsiteControllers@editarDados');
