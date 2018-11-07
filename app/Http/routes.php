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
route::get('/reportegrupo', 'grupo_controller@reportegrupo');


//planes de estudio
route::get('/altaplan','planes_controller@altaplan');
route::POST('/guardaplan','planes_controller@guardaplan')->name('guardaplan');
route::get('/reporteplan', 'planes_controller@reporteplan');

//ciclos escolares
route::get('/altaciclo','ciclos_controller@altaciclo');
route::POST('/guardaciclo','ciclos_controller@guardaciclo')->name('guardaciclo');
route::get('/reporteciclo', 'ciclos_controller@reporteciclo');

//empresas
route::get('/altaempresa','empresa_controller@altaempresa');
route::POST('/guardaempresa','empresa_controller@guardaempresa')->name('guardaempresa');
route::get('/reporteempresa', 'empresa_controller@reporteempresa');

//asesor industrial
route::get('/altaasesorind','asesorind_controller@altaasesorind');
route::POST('/guardaasesorind','asesorind_controller@guardaasesorind')->name('guardaasesorind');
route::get('/reporteasesorind', 'asesorind_controller@reporteasesorind');

// cuatrimestre
route::get('/altacuatrimestre','cuatrimestre_controller@altacuatrimestre');
route::POST('/guardacuatrimestre','cuatrimestre_controller@guardacuatrimestre')->name('guardacuatrimestre');
route::get('/reportecuatrimestre', 'cuatrimestre_controller@reportecuatrimestre');

//asesor academico
route::get('/altaasesor','asesor_controller@altaasesor');
route::POST('/guardaasesor','asesor_controller@guardaasesor')->name('guardaasesor');
route::get('/reporteasesoraca', 'asesor_controller@reporteasesoraca');

//tutores
route::get('/altatutor','tutor_controller@altatutor');
route::POST('/guardatutor','tutor_controller@guardatutor')->name('guardatutor');
route::get('/reportetutor', 'tutor_controller@reportetutor');

//Carrera
route::get('/altacarrera','carrera_controller@altacarrera');
route::POST('/guardacarrera','carrera_controller@guardacarrera')->name('guardacarrera');
route::get('/reportecarrera', 'carrera_controller@reportecarrera');

//Recursos Humanos
route::get('/altarecurso','recurso_controller@altarecurso');
route::POST('/guardarecurso','recurso_controller@guardarecurso')->name('guardarecurso');
route::get('/reporterecurso', 'recurso_controller@reporterecurso');

//Rankings
route::get('/altaranking','ranking_controller@altaranking');
route::POST('/guardaranking','ranking_controller@guardaranking')->name('guardaranking');

//evaluacion
route::get('/altaevaluacion','evaluaciones_controller@altaevaluacion');
route::POST('/guardaevaluacion','evaluaciones_controller@guardaevaluacion')->name('guardaevaluacion');

//Alumno
route::get('/altaalumno','alumno_controller@altaalumno');
route::POST('/guardaalumno','alumno_controller@guardaalumno')->name('guardaalumno');
route::get('/reportealumno', 'alumno_controller@reportealumno');

//asignacion
route::get('/altaasignacion','asignacion_controller@altaasignacion');
route::POST('/guardaasignacion','asignacion_controller@guardaasignacion')->name('guardaasignacion');

//administrador
route::get('/V_admin','RutasView@V_admin')->name('V_admin');
route::get('/altaempresa','empresa_controller@altaempresa')->name('altaempresa');


// Alumnovista
route::get('/V_admin','RutasView@V_admin')->name('V_admin');
route::get('/altaalumno','alumno_controller@altaalumno')->name('altaalumno');


// Vistacarreras
route::get('/V_admin','RutasView@V_admin')->name('V_admin');
route::get('/altacarreras','carrera_controller@altacarreras')->name('altacarreras');


// Gruposvista
route::get('/V_admin','RutasView@V_admin')->name('V_admin');
route::get('/altagrupo','grupo_controller@altagrupo')->name('altagrupo');

// Reporte Cuatrimestre
route::get('/V_admin','RutasView@V_admin')->name('V_admin');
route::get('/reportecuatrimestre','cuatrimestre_controller@reportecuatrimestre')->name('reportecuatrimestre');


// Reporte Grupo
route::get('/V_admin','RutasView@V_admin')->name('V_admin');
route::get('/reportegrupo','grupo_controller@reportegrupo')->name('reportegrupo');


// Reporte Cuatrimestre 
route::get('/V_admin','RutasView@V_admin')->name('V_admin');
route::get('/reportecuatrimestre','cuatrimestre_controller@reportecuatrimestre')->name('reportecuatrimestre');



// Reporte Ciclos escolares
route::get('/V_admin','RutasView@V_admin')->name('V_admin');
route::get('/reporteciclo','ciclos_controller@reporteciclo')->name('reporteciclo');



// Reporte Carrera
route::get('/V_admin','RutasView@V_admin')->name('V_admin');
route::get('/reportecarrera','carrera_controller@reportecarrera')->name('reportecarrera');


// Reporte Alumnos
route::get('/V_admin','RutasView@V_admin')->name('V_admin');
route::get('/reportealumno','alumno_controller@reportealumno')->name('reportealumno');


// Reporte Planes
route::get('/V_admin','RutasView@V_admin')->name('V_admin');
route::get('/reporteplan','planes_controller@reporteplan')->name('reporteplan');


// View asignacion
route::get('/V_admin','RutasView@V_admin')->name('V_admin');
route::get('/altaasignacion','asignacion_controller@altaasignacion');


// Vista Ranking
route::get('/V_admin','RutasView@V_admin')->name('V_admin');
route::get('/altaranking','ranking_controller@altaranking')->name('altaranking');


// Vista Asesor In
route::get('/V_admin','RutasView@V_admin')->name('V_admin');
route::get('/altaasesorind','asesorind_controller@altaasesorind')->name('altaasesorind');


// Vista Recussos H.
route::get('/V_admin','RutasView@V_admin')->name('V_admin');
route::get('/altarecurso','recurso_controller@altarecurso')->name('altarecurso');


// Vista Reporte Ind.
route::get('/V_admin','RutasView@V_admin')->name('V_admin');
route::get('/reporteasesorind','asesorind_controller@reporteasesorind')->name('reporteasesorind');



// Vista Reporte Empresa
route::get('/V_admin','RutasView@V_admin')->name('V_admin');
route::get('/reporteempresa','empresa_controller@reporteempresa')->name('reporteempresa');



// Vista Reporte Recusos H.
route::get('/V_admin','RutasView@V_admin')->name('V_admin');
route::get('/reporterecurso','recurso_controller@reporterecurso')->name('reporterecurso');


// Vista asesor Acad.
route::get('/V_admin','RutasView@V_admin')->name('V_admin');
route::get('/altaasesor','asesor_controller@altaasesor')->name('altaasesor');


// Vista Reporte Asesor Acad.
route::get('/V_admin','RutasView@V_admin')->name('V_admin');
route::get('/reporteasesoraca','asesor_controller@reporteasesoraca')->name('reporteasesoraca');


// Vista Asigancion.
route::get('/V_admin','RutasView@V_admin')->name('V_admin');
route::get('/altaasignacion','asignacion_controller@altaasignacion')->name('altaasignacion');



// Vista Carrera.
route::get('/V_admin','RutasView@V_admin')->name('V_admin');
route::get('/altacarrera','carrera_controller@altacarrera')->name('altacarrera');



// Vista Ciclos
route::get('/V_admin','RutasView@V_admin')->name('V_admin');
route::get('/altaciclo','ciclos_controller@altaciclo')->name('altaciclo');


// Vista Cuatrimestre
route::get('/V_admin','RutasView@V_admin')->name('V_admin');
route::get('/altacuatrimestre','cuatrimestre_controller@altacuatrimestre')->name('altacuatrimestre');


// Vista Grupo
route::get('/V_admin','RutasView@V_admin')->name('V_admin');
route::get('/altagrupo','grupo_controller@altagrupo')->name('altagrupo');



// Vista Planes
route::get('/V_admin','RutasView@V_admin')->name('V_admin');
route::get('/altaplan','planes_controller@altaplan')->name('altaplan');


// Vista Reporte Asigancion.
route::get('/V_admin','RutasView@V_admin')->name('V_admin');
route::get('/altaasignacion','asignacion_controller@altaasignacion')->name('altaasignacion');
