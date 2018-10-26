<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//grupo
route::get('/altagrupo','grupo_controller@altagrupo');
route::POST('/guardagrupo','grupo_controller@guardagrupo')->name('guardagrupo');

//planes de estudio
route::get('/altaplan','planes_controller@altaplan');
route::POST('/guardaplan','planes_controller@guardaplan')->name('guardaplan');

//ciclos escolares
route::get('/altaciclo','ciclos_controller@altaciclo');
route::POST('/guardaciclo','ciclos_controller@guardaciclo')->name('guardaciclo');

//empresas
route::get('/altaempresa','empresa_controller@altaempresa');
route::POST('/guardaempresa','empresa_controller@guardaempresa')->name('guardaempresa');

//asesor industrial
route::get('/altaasesorind','asesorind_controller@altaasesorind');
route::POST('/guardaasesorind','asesorind_controller@guardaasesorind')->name('guardaasesorind');
route::get('/reporteasesorind', 'asesorind_controller@reporteasesorind');

// cuatrimestre
route::get('/altacuatrimestre','cuatrimestre_controller@altacuatrimestre');
route::POST('/guardacuatrimestre','cuatrimestre_controller@guardacuatrimestre')->name('guardacuatrimestre');

//asesor academico
route::get('/altaasesor','asesor_controller@altaasesor');
route::POST('/guardaasesor','asesor_controller@guardaasesor')->name('guardaasesor');
route::get('/reporteasesoraca', 'asesor_controller@reporteasesoraca');

//tutores
route::get('/altatutor','tutor_controller@altatutor');
route::POST('/guardatutor','tutor_controller@guardatutor')->name('guardatutor');

//Carrera
route::get('/altacarrera','carrera_controller@altacarrera');
route::POST('/guardacarrera','carrera_controller@guardacarrera')->name('guardacarrera');

//Recursos Humanos
route::get('/altarecurso','recurso_controller@altarecurso');
route::POST('/guardarecurso','recurso_controller@guardarecurso')->name('guardarecurso');

//Rankings
route::get('/altaranking','ranking_controller@altaranking');
route::POST('/guardaranking','ranking_controller@guardaranking')->name('guardaranking');


