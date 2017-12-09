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


/*
| --------------------------------------------------------------------------
| Routes for pages front page
| --------------------------------------------------------------------------
*/
Route::get('/', 			        function () { return view('pages.home'); });
Route::get('/em_brief', 	        function () { return view('pages.em_brief'); });
Route::get('/em_vm', 		        function () { return view('pages.em_vm'); });
Route::get('/em_gallery', 	        function () { return view('pages.em_gallery'); });
Route::get('/em_team', 		        function () { return view('pages.em_team'); });
Route::get('/em_teachers',	        function () { return view('pages.em_teachers'); });
Route::get('/em_module',	        function () { return view('pages.em_module'); });
Route::get('/em_method',	        function () { return view('pages.em_method'); });
Route::get('/internship',           function () { return view('pages.em_internship'); });
Route::get('/internship_formulir',  function () { return view('pages.em_internship_formulir'); });

Route::get('/activation',           function () { return view('pages.active_account'); });
/*
| --------------------------------------------------------------------------
| Routes for dashboard student
| --------------------------------------------------------------------------
*/
Route::auth();
Route::get('auth/verify/{token}','Auth\AuthController@verify');
Route::get('auth/send-verification', 'Auth\AuthController@sendVerification');

// Route::get('student/login', 	'Student\AuthController@showLoginForm');
// Route::post('student/login', 	'Student\AuthController@login');
// Route::get('student/logout', 	'Student\AuthController@logout');
// Route::get('student/register', 	'Student\AuthController@showRegistrationForm');
// Route::post('student/register', 'Student\AuthController@register');
// // Security for inject link
// Route::get('/student/dashboard', ['middleware' => 'student', function() {
//     return view('dashboard.student.pages.student_home');
// }]);


/*
| --------------------------------------------------------------------------
| Routes for dashboard admin
| --------------------------------------------------------------------------
*/
Route::get('admin/login', 		'Admin\AuthController@showLoginForm');
Route::post('admin/login', 		'Admin\AuthController@login');
Route::get('admin/logout', 		'Admin\AuthController@logout');
Route::get('admin/register', 	'Admin\AuthController@showRegistrationForm');
Route::post('admin/register', 	'Admin\AuthController@register');
// Security for inject link
Route::get('/admin/dashboard', ['middleware' => 'admin', function() {
    return view('dashboard.admin.pages.admin_home');
}]);



Route::get('/home', 'HomeController@index');
