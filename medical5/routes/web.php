<?php

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
use App\User;
use App\Notifications\CommentNotification;
Route::get('/', function () {
    return view('welcome');
});


Route::get('/aboutus', function () {
    return view('about-us');
});


Route::get('/blog', function () {
    return view('blog');
});

Route::get('/index', function () {
    return view('index');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/single-blog', function () {
    return view('single-blog');
});
Route::get('/index-icons', function () {
    return view('index-icons');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/dashboard', function () {
    return view('pannel');
});

Route::get('/notify',function(){
	$user = User::find(2);
	$user->notify(new CommentNotification("ALi"));
	return "User Notified";
});

Route::get('/readnot',function(){
	$user = User::find(2);
	foreach ($user->unreadNotifications as $not) {

		echo $not['data']['msg'];
		$not->markAsRead();
		echo "<br>";
	}
});

Route::get('/makeappointment', function () {
    return view('makeappointment');
});


Route::get('/sos', function () {
    return view('emergencies');
});


Route::get('/SyriaHos', function () {
    return view('SyriaHos');
});



Route::get('/testdash', function () {
    return view('sublayouts/testdash');
});

Route::get('/myprofile', function () {
    return view('sublayouts2/MyProfile');
});


Route::get('/OnlineDoctor', function () {
    return view('OnlineDoctor');
});


Route::get('/NearestDoctor', function () {
    return view('NearestDoctor');
});
Route::get('/NearestPharmacy', function () {
    return view('NearestPharmacy');
});

Route::get('/OurTeam', function () {
    return view('OurTeam');
});
Route::get('/Maintenance', 'ToursController@index');

Route::get('/pp', function () {
    return view('patientProgress');
});



//Services
Route::get('/clinics', function () {
    return view('clinics');
});
Route::get('/heartSurgeries', function () {
    return view('heartSurgeries');
});
Route::get('/heartQathter', function () {
    return view('heartQathter');
});
Route::get('/laboratory', function () {
    return view('laboratory');
});


//Our Team
Route::get('/specialized', function () {
    return view('specialized');
});
Route::get('/resident', function () {
    return view('resident');
});
Route::get('/nursing', function () {
    return view('nursing');
});
Route::get('/employees', function () {
    return view('employees');
});


//Blog
Route::get('/hospitalNews', function () {
    return view('hospitalNews');
});
Route::get('/medicalBlog', function () {
    return view('medicalBlog');
});
Route::get('/medicalLibrary', function () {
    return view('medicalLibrary');
});
Route::get('/medicalDectionary', function () {
    return view('medicalDectionary');
});






Route::get('/ourDoctors', function () {
    return view('ourDoctors');
});



Route::get('/services', function () {
    return view('services');
});


Route::get('/aboutUs', function () {
    return view('aboutUs');
});

Route::get('/medicalBlog', function () {
    return view('medicalBlog');
});


Route::get('/hotLine', function () {
    return view('hotLine');
});




Route::get('/medicalBlog2', function () {
    return view('medicalBlog2');
});

Route::get('/BB', function () {
    return view('BB');
});
Route::get('/BD', function () {
    return view('BD');
});


Route::get('/showProfile', function () {
    return view('showProfile');
});

Route::get('/editProfile', function () {
    return view('editProfile');
});

Route::get('/SOO', 'OperationController@index');
Route::resource('operation', 'OperationController');
Route::get('/SOQ', function () {
    return view('SOQ');
});

Route::resource('order', 'OrdersController');




Route::get('/orderMS', function () {
    return view('orderMS');
});

Route::get('/orderSS', function () {
    return view('orderSS');
});

Route::get('/orderMnS', function () {
    return view('orderMnS');
});


Route::get('/roomD', 'BedsController@getAll');

Route::get('/smoking', function () {
    return view('smoking');
});


Route::get('/corona', function () {
    return view('corona');
});

Route::get('/ventilation', function () {
    return view('ventilation');
});
Route::post('/changestatus','BedsController@changeStatus');
Route::post('/makeappoinment','AppoinmentController@make');
Route::resource('/tours','ToursController');
