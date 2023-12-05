<?php

use App\Http\Controllers\CreateHistoryController;
use App\Http\Controllers\DepartamentUserController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\Signupcontroller;
use Illuminate\Auth\Events\Login;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', function(){
    return view('Registro');
});




Route::get('/inicio', [IndexController::class, 'index'])->name('inicio');

Route::get('quienesomos', [IndexController::class, 'info'])->name('info');

Route::get('perfil', [IndexController::class, 'perfil'])->name('perfil');

Route::get('preview', [CreateHistoryController::class, 'Preview'])->name('Pre');

Route::get('subir_historia', [CreateHistoryController::class, 'CreateHistory'])->name('subirhistoria');

route::get('formulario', [CreateHistoryController::class, 'formulario'])->name('form');

Route::get('tarjetas_historia', [HistoryController::class, 'Tarjetas'])->name('historia');

Route::get('leyenda', [HistoryController::class, 'Leyenda'])->name('leyenda');

route::get('user/recuperar', [LoginUserController::class, 'Recuperar'])->name('recuperar');

route::get('Login', [LoginUserController::class, 'login'])->name('iniciosesion');

route::get('dosleyendas', [HistoryController::class, 'DosLeyendas']);

route::get('contacto', [IndexController::class, 'Contacto'])->name('contac');

Route::get('Registro', [Signupcontroller::class, 'show'])->name('registro');


//RUTAS DEPARTAMENTOS


Route::get('tarjetaCundinamarca', [DepartamentUserController::class, 'Cundinamarca'])->name('cundi');

Route::get('tarjetaAntioquia', [DepartamentUserController::class, 'Antioquia'])->name('antiqi');

Route::get('tarjetaSantander', [DepartamentUserController::class, 'Santander'])->name('santa');

Route::get('tarjetaAtlantico', [DepartamentUserController::class, 'Atlantico'])->name('atlan');

Route::get('tarjetaValleDelCauca', [DepartamentUserController::class, 'ValleDelCauca'])->name('vallunomano');

Route::get('tarjetaRisaralda', [DepartamentUserController::class])->name('risas');

Route::get('tarjetaCaldas', [DepartamentUserController::class, 'Caldas'])->name('caldas');

Route::get('tarjetaAmazonas', [DepartamentUserController::class, 'Amazonas'])->name('amazing');

Route::get('tarjetaArauca', [DepartamentUserController::class, 'Arauca'])->name('aureano');

Route::get('tarjetaCauca', [DepartamentUserController::class, 'Cauca'])->name('caucasicos');

Route::get('tarjetaCesar', [DepartamentUserController::class, 'Cesar'])->name('cesaraugusto');

Route::get('tarjetaChoco', [DepartamentUserController::class, 'Choco'])->name('chocokripi');

Route::get('tarjetaCordoba', [DepartamentUserController::class, 'Cordoba'])->name('gordoba');

Route::get('tarjetaCaqueta', [DepartamentUserController::class, 'Caqueta'])->name('caquebrr');

Route::get('tarjetaGuainia', [DepartamentUserController::class, 'Guainia'])->name('guayayai');

Route::get('tarjetaGuaviare', [DepartamentUserController::class, 'Guaviare'])->name('suave');

Route::get('tarjetaGuajira', [DepartamentUserController::class, 'Guajira'])->name('naira');

Route::get('tarjetaMagdalena', [DepartamentUserController::class, 'Magdalena'])->name('oiemagda');

Route::get('tarjetaNariño', [DepartamentUserController::class, 'Nariño'])->name('nariñon');

Route::get('tarjetaPutumayo', [DepartamentUserController::class, 'Putumayo'])->name('utumaño');

Route::get('tarjetaSucre', [DepartamentUserController::class, 'Sucre'])->name('suck');

Route::get('tarjetaVichada', [DepartamentUserController::class, 'Vichada'])->name('fichada');

Route::get('tarjetaVaupes', [DepartamentUserController::class, 'Vaupes'])->name('elpez');

Route::get('tarjetaBolivar', [DepartamentUserController::class, 'Bolivar'])->name('bolivarianos');

Route::get('tarjetaBoyaca', [DepartamentUserController::class, 'Boyaca'])->name('boyacomans');

Route::get('tarjetaCasanare', [DepartamentUserController::class, 'Casanare'])->name('cazans');

Route::get('tarjetaHuila', [DepartamentUserController::class, 'Huila'])->name('aguila');

Route::get('tarjetaMeta', [DepartamentUserController::class, 'Meta'])->name('metantaforas');

Route::get('tarjetaNorteSantander', [DepartamentUserController::class, 'NorteDeSantander'])->name('norteños');

Route::get('tarjetaQuindio', [DepartamentUserController::class, 'Quindio'])->name('qinflow');

Route::get('tarjetaTolima', [DepartamentUserController::class, 'Tolima'])->name('laslechonas');

////////////////////// Historias/////////////////////////////////

////////////////////////////////////////AMAZONAS/////////////////////////////////////////////////////////////////
Route::get('HistoriaA1', [HistoryController::class, 'HistoriaA1'])->name('bufeo');
Route::get('HistoriaA2', [HistoryController::class, 'HistoriaA2'])->name('chuya');
Route::get('HistoriaA3', [HistoryController::class, 'HistoriaA3'])->name('creacion');
Route::get('HistoriaAm3', [HistoryController::class, 'HistoriaAm3'])->name('creacion2');
Route::get('HistoriaA4', [HistoryController::class, 'HistoriaA4'])->name('cupurita');

/////////////////////////////////////////ANTIOQUIA/////////////////////////////////////////////////////////////

////////////////////////////////////////BOYACA///////////////////////////////////////////////////////////////////
Route::get('HistoriaB1', [HistoryController::class, 'HistoriaB1'])->name('pajaro');
Route::get('HistoriaB2', [HistoryController::class, 'HistoriaB2'])->name('cacique');
Route::get('HistoriaB3', [HistoryController::class, 'HistoriaB3'])->name('perro');
Route::get('HistoriaB4', [HistoryController::class, 'HistoriaB4'])->name('goroncha');
Route::get('HistoriaBo4', [HistoryController::class, 'HistoriaBo4'])->name('goroncha2');
////////////////////////////////////////CAQUETA//////////////////////////////////////////////////////////////////
Route::get('HistoriaCaq1', [HistoryController::class, 'HistoriaCaq1'])->name('Doncella');
Route::get('HistoriaCaq2', [HistoryController::class, 'HistoriaCaq2'])->name('Mula');
Route::get('HistoriaCaq3', [HistoryController::class, 'HistoriaCaq3'])->name('Pollo');
Route::get('HistoriaCaq4', [HistoryController::class, 'HistoriaCaq4'])->name('Tunjo');
////////////////////////////////////////CASANARE/////////////////////////////////////////////////////////////////
Route::get('HistoriaCas1', [HistoryController::class, 'HistoriaCas1'])->name('Bola');
Route::get('HistoriaCasa1', [HistoryController::class, 'HistoriaCasa1'])->name('Bola2');
Route::get('HistoriaCas2', [HistoryController::class, 'HistoriaCas2'])->name('Felipe');
Route::get('HistoriaCasa2', [HistoryController::class, 'HistoriaCasa2'])->name('Felip2');
Route::get('HistoriaCas3', [HistoryController::class, 'HistoriaCas3'])->name('Rompe');
Route::get('HistoriaCasa3', [HistoryController::class, 'HistoriaCasa3'])->name('Rompe2');
Route::get('HistoriaCas4', [HistoryController::class, 'HistoriaCas4'])->name('Super');
Route::get('HistoriaCasa4', [HistoryController::class, 'HistoriaCasa4'])->name('Super2');
////////////////////////////////////////CAUCA////////////////////////////////////////////////////////////////////
Route::get('HistoriaCau1', [HistoryController::class, 'HistoriaCau1'])->name('cresta');
Route::get('HistoriaCau2', [HistoryController::class, 'HistoriaCau2'])->name('llorona');
Route::get('HistoriaCA2', [HistoryController::class, 'HistoriaCA2'])->name('llorona2');
Route::get('HistoriaCau3', [HistoryController::class, 'HistoriaCau3'])->name('patia');
Route::get('HistoriaCA3', [HistoryController::class, 'HistoriaCA3'])->name('patia2');
Route::get('HistoriaCau4', [HistoryController::class, 'HistoriaCau4'])->name('sebas');
////////////////////////////////////////CHOCO////////////////////////////////////////////////////////////////////
Route::get('HistoriaCho1', [HistoryController::class, 'HistoriaCho1'])->name('indio');
Route::get('HistoriaCho2', [HistoryController::class, 'HistoriaCho2'])->name('mohan');
Route::get('HistoriaCho2a', [HistoryController::class, 'HistoriaCho2a'])->name('mohan2');
Route::get('HistoriaCho3', [HistoryController::class, 'HistoriaCho3'])->name('muelon');
Route::get('HistoriaCho3a', [HistoryController::class, 'HistoriaCho3a'])->name('muelon2');
Route::get('HistoriaCho4', [HistoryController::class, 'HistoriaCho4'])->name('anima');
////////////////////////////////////////CORDOBA//////////////////////////////////////////////////////////////////
Route::get('HistoriaCor1', [HistoryController::class, 'HistoriaCor1'])->name('agueroco');
Route::get('HistoriaCor2', [HistoryController::class, 'HistoriaCor2'])->name('aguja');
Route::get('HistoriaCor3', [HistoryController::class, 'HistoriaCor3'])->name('anime');
Route::get('HistoriaCor4', [HistoryController::class, 'HistoriaCor4'])->name('griton');
////////////////////////////////////////CUNDINAMARCA/////////////////////////////////////////////////////////////
Route::get('HistoriaC1', [HistoryController::class, 'HistoriaC1'])->name('3brujas');
Route::get('HistoriaCu1', [HistoryController::class, 'HistoriaCu1'])->name('3brujas2');
Route::get('HistoriaC2', [HistoryController::class, 'HistoriaC2'])->name('david');
Route::get('HistoriaCu2', [HistoryController::class, 'HistoriacU2'])->name('david2');
Route::get('HistoriaC3', [HistoryController::class, 'HistoriaC3'])->name('Dama');
Route::get('HistoriaCu3', [HistoryController::class, 'HistoriaCu3'])->name('Dama2');
////////////////////////////////////////GUAINIA//////////////////////////////////////////////////////////////////
Route::get('HistoriaG1', [HistoryController::class, 'HistoriaG1'])->name('flor');
Route::get('HistoriaGu1', [HistoryController::class, 'HistoriaGu1'])->name('flor2');
Route::get('HistoriaG2', [HistoryController::class, 'HistoriaG2'])->name('india');
Route::get('HistoriaGu2', [HistoryController::class, 'HistoriaGu2'])->name('india2');
Route::get('HistoriaG3', [HistoryController::class, 'HistoriaG3'])->name('soto');
////////////////////////////////////////GUAVIARE/////////////////////////////////////////////////////////////////
Route::get('HistoriaGv1', [HistoryController::class, 'HistoriaGv1'])->name('compa');
Route::get('HistoriaGv2', [HistoryController::class, 'HistoriaGv2'])->name('crea');
Route::get('HistoriaGuv2', [HistoryController::class, 'HistoriaGuv2'])->name('crea2');
Route::get('HistoriaGv3', [HistoryController::class, 'HistoriaGv3'])->name('moto');
Route::get('HistoriaGv4', [HistoryController::class, 'HistoriaGv4'])->name('yuripa');
Route::get('HistoriaGuv4', [HistoryController::class, 'HistoriaGuv1'])->name('yuripa2');
////////////////////////////////////////HUILA////////////////////////////////////////////////////////////////////
Route::get('HistoriaH1', [HistoryController::class, 'HistoriaH1'])->name('Guitana');
Route::get('HistoriaHu1', [HistoryController::class, 'HistoriaHu1'])->name('Guitana2');
Route::get('HistoriaH2', [HistoryController::class, 'HistoriaH2'])->name('Sombre');
Route::get('HistoriaHu2', [HistoryController::class, 'HistoriaHu2'])->name('Sombre2');
Route::get('HistoriaH3', [HistoryController::class, 'HistoriaH3'])->name('Taita');
////////////////////////////////////////MAGDALENA////////////////////////////////////////////////////////////////
Route::get('HistoriaMa1', [HistoryController::class, 'HistoriaMa1'])->name('brama');
Route::get('HistoriaMa2', [HistoryController::class, 'HistoriaMa2'])->name('caiman');
Route::get('HistoriaMa2a', [HistoryController::class, 'HistoriaMa2a'])->name('caiman2');
Route::get('HistoriaMa3', [HistoryController::class, 'HistoriaMa3'])->name('casad');
Route::get('HistoriaMa4', [HistoryController::class, 'HistoriaMa4'])->name('pata');
Route::get('HistoriaMa4a', [HistoryController::class, 'HistoriaMa4a'])->name('pata2');
////////////////////////////////////////META/////////////////////////////////////////////////////////////////////
Route::get('HistoriaM1', [HistoryController::class, 'HistoriaM1'])->name('candileja');
Route::get('HistoriaM2', [HistoryController::class, 'HistoriaM2'])->name('Silbon');
Route::get('HistoriaMS2', [HistoryController::class, 'HistoriaMs2'])->name('Silbon2');
Route::get('HistoriaM3', [HistoryController::class, 'HistoriaM3'])->name('juan');
Route::get('HistoriaMS3', [HistoryController::class, 'HistoriaMs3'])->name('juan2');
Route::get('HistoriaM4', [HistoryController::class, 'HistoriaM4'])->name('Rezo');
////////////////////////////////////////NARIÑO///////////////////////////////////////////////////////////////////
Route::get('HistoriaÑ1', [HistoryController::class, 'HistoriaÑ1'])->name('cueche');
Route::get('HistoriaÑa1', [HistoryController::class, 'HistoriaÑa1'])->name('cueche2');
Route::get('HistoriaÑ2', [HistoryController::class, 'HistoriaÑ2'])->name('laguna');
Route::get('HistoriaÑa2', [HistoryController::class, 'HistoriaÑa2'])->name('laguna3');
Route::get('HistoriaÑ3', [HistoryController::class, 'HistoriaÑ3'])->name('padre');
Route::get('HistoriaÑ4', [HistoryController::class, 'HistoriaÑ4'])->name('viuda');
////////////////////////////////////////PUTUMAYO/////////////////////////////////////////////////////////////////
Route::get('HistoriaPu1', [HistoryController::class, 'HistoriaPu1'])->name('Chumbelo');
Route::get('HistoriaPu2', [HistoryController::class, 'HistoriaPu2'])->name('DiabloV');
Route::get('HistoriaPu3', [HistoryController::class, 'HistoriaPu3'])->name('Fuete');
Route::get('HistoriaPut3', [HistoryController::class, 'HistoriaPut3'])->name('Fuete2');
Route::get('HistoriaPu4', [HistoryController::class, 'HistoriaPu4'])->name('Yage');
Route::get('HistoriaPut4', [HistoryController::class, 'HistoriaPut4'])->name('Yage2');
///////////////////////////////////////Sucre/////////////////////////////////////////////////////////////////////
Route::get('HistoriaSu1', [HistoryController::class, 'HistoriaSu1'])->name('corco');
Route::get('HistoriaSu2', [HistoryController::class, 'HistoriaSu2'])->name('lara');
///////////////////////////////////////VALLE DEL CAUCA///////////////////////////////////////////////////////////
Route::get('HistoriaVll1', [HistoryController::class, 'HistoriaVll1'])->name('burizaco');
Route::get('HistoriaVll2', [HistoryController::class, 'HistoriaVll2'])->name('mano');
Route::get('HistoriaVll3', [HistoryController::class, 'HistoriaVll3'])->name('tunda');
///////////////////////////////////////VAUPES////////////////////////////////////////////////////////////////////
Route::get('HistoriaVa1', [HistoryController::class, 'HistoriaVa1'])->name('ague');
Route::get('HistoriaVau1', [HistoryController::class, 'HistoriaVau1'])->name('ague2');
Route::get('HistoriaVa2', [HistoryController::class, 'HistoriaVa2'])->name('danta');
Route::get('HistoriaVa3', [HistoryController::class, 'HistoriaVa3'])->name('sol');
Route::get('HistoriaVau3', [HistoryController::class, 'HistoriaVau3'])->name('sol2');
Route::get('HistoriaVau4', [HistoryController::class, 'HistoriaVau4'])->name('sol3');
Route::get('HistoriaVau5', [HistoryController::class, 'HistoriaVau5'])->name('sol4');
Route::get('HistoriaVa4', [HistoryController::class, 'HistoriaVa4'])->name('Vau');
Route::get('HistoriaVau6', [HistoryController::class, 'HistoriaVau6'])->name('Vau2');
Route::get('HistoriaVau7', [HistoryController::class, 'HistoriaVau7'])->name('Vau3');

///////////////////////////////////////VICHADA///////////////////////////////////////////////////////////////////
Route::get('HistoriaV1', [HistoryController::class, 'HistoriaV1'])->name('laja');
Route::get('HistoriaV2', [HistoryController::class, 'HistoriaV2'])->name('leko');