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

Route::get('/', function () {
    return view('welcome');
});

use App\courses_ev;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('Welcome');
});
route::POST('sLogin', function () {
    return view('/views2.index');
});
route::get('/projects', function () {
    return view('/projects.index');
});
route::get('/Account', function () {
    return view('/Account.index');
});
route::get('/Setting', function () {
    return view('/Account.Setting');
});
route::get('/c_courses', function () {

    return view('/projects.index');
});
route::get('/A_S', function () {
    return view('/projects.site_as');
});
route::get('/Classroom', function () {
    $requests = request('requests');
    return view('/display.courses', compact('requests'));
});
route::get('/cr_tut', function () {
    return view('/projects.cr_tut');
});
route::get('/ytasks', function () {
    return view('/projects.tasks');
});
route::get('/-courses', function () {
    $request  = courses_ev::where('cowner', auth()->id())->get();
    return view('/courses.index', compact('request'));
});
//Route::get('{request}/course-content', function () {

//    return view('/courses.content');
//});

Route::get('/course', function () {

    return view('/courses.index');
});
Route::get('/Students', function () {

    return view('/courses.Students');
});
route::get('/calendar', function () {

    return view('/calen.index');
});
route::get('/calendar', function () {

    return view('/calen.index');
});
route::get('/forum', function () {

    return view('/calen.forum');
});

route::get('/coursess', function () {
    $request  = courses_ev::where('cowner', auth()->id())->get();
    return view('/display.index', compact('request'));
});
Route::get('/grades', function () {
    $request  = courses_ev::where('cowner', auth()->id())->get();
    return view('/display.grades', compact('request'));
});
Route::get('/progress', function () {
    $request  = courses_ev::where('cowner', auth()->id())->get();
    return view('/display.progress', compact('request'));
});
Route::get('/progress', function () {
    $request  = courses_ev::where('cowner', auth()->id())->get();
    return view('/display.progress', compact('request'));
});



Route::get('/messages', function () {

    return view('/messages.index');
});





Route::get('/SUBM', function () {
    $request  = courses_ev::where('cowner', auth()->id())->get();
    return view('/submissions.submission', compact('request'));
});
Route::get('/SUBMt', function () {
    $request  = courses_ev::where('cowner', auth()->id())->get();
    return view('/submissions.submission', compact('request'));
});
Route::get('/SUBMa', function () {
    $request  = courses_ev::where('cowner', auth()->id())->get();
    return view('/submissions.submission', compact('request'));
});
Route::resource('/tutorials', 'TutorialController');
Route::get('ttdelete/{request}/tutorial', 'TutorialController@destroy');
Route::get('/tutort', 'TutorialController@show');
//route::get('/tasks', function () {
//$task=DB::tabk
//   return view('/projects.task');
//});
Route::get('/tasks', 'disp_task@show');
Route::post('/edittask', 'input@update');
//route::get('/courses', function () {
//   return view('/courses');
//});

route::get('/studs', 't@view');
route::post('/backgroundimage', 'MessagelectController@create');


route::post('/updateuser', 't@store');
route::post('/file', 't@avatar');
route::get('/deleted/{nmg}', 't@get');

route::get('/view', function () {

    return view('/display.dp');
});

route::get('/ai', function () {

    return view('/layouts.dashboard');
});

route::get('/lecturers', 'RegisterController@show');
route::get('/t/{contenttid}', 'TcontrollerController@show');
route::post('/message', 'RegisterController@cmessages');
route::get('/lecturer/{item}', 'RegisterController@cmss');
route::get('/messagesearch/{td}', 'RegisterController@messagesearch');

route::get('/altss', 'CoursesEvController@edit');
route::get('/mtgs', 'CoursesEvController@show');

route::resource('/cont', 'ContentController');
route::resource('/content', 'ContentcreateController');
route::resource('taskc', 'TasksController');
route::post('/testquestions', 'SubmissionController@create');
route::post('/testq', 'SubmissionController@store');
route::post('/assignments', 'SubmissionController@index');
route::post('/assignment', 'SubmissionController@show');
route::post('/delete/{requests}/test', 'SubmissionController@destroy');
route::get('/d', 'SubmissionController@update');
route::get('/l', 'SubmissionController@utt');
route::get('/fdelete/{requests}/test', 'SubmissionController@ult');
route::get('/a', 'SubmissionController@ulta');
route::get('/f', 'SubmissionController@ddth');
route::get('/atdelete/{requests}/test', 'SubmissionController@delet');
route::get('/afdelete/{requests}/test', 'SubmissionController@deletee');
route::resource('/taskcc', 'taskse');
route::post('/grades', 'taskse@store');
route::post('/gshow', 'taskse@get');
route::post('/gshoy', 'taskse@gett');

route::post('/create', 'ForumController@create');
route::get('/td/{vart}', 'ForumController@show');
route::get('/it', 'ForumController@show2');
route::get('/it2', 'ForumController@show3');
route::get('/it3', 'ForumController@show4');
route::get('/t/{vart}', 'ForumController@show5');
route::post('/comments', 'ForumController@store');
route::get('/search/{t}', 'ForumController@show6');
route::get('/search1/{td}', 'ForumController@show7');
route::get('/assignment/{requests}/course-content', 'SubmissionController@VaW');

route::get('/test/{requests}/course-content', 'SubmissionController@VeW');

route::post('/edele/{item}', 'taskse@destroy');
route::post('/ddele/{item}', 'taskse@deled');
route::get('/editd/{item}', 'taskse@edd');
route::get('/tvd', 'taskse@view');
route::get('/tsv', 'taskse@file');
route::post('/upd', 'taskse@upgrade');
route::post('/filesub', 'taskse@enter');
route::resource('/{tasks}/Delete', 't');
route::post('/edit/{requests}/content', 'contentedit@index');
route::post('/submit', 'contentedit@update');
//route::get('/view', 'contentedit@view');
route::post('/addcont', 'AdditionalController@store');
//route::resource('/{tasks}/Editl', 't@update');
route::resource('/ht/{requests}/content', 'TcontrollerController');
route::get('/edelete/{requests}', 'AdditionalController@destroy');
route::get('/exdelete/{requests}', 'AdditionalController@delete');
route::get('/deletec/{requests}', 'TcontrollerController@destroy');
route::get('/resources', 'disp_task@view');
route::get('/add/{requests}', 'AdditionalController@view');
route::get('/{tasks}/Editl', 'taskse@edittt');
//route::resource('/{t}/edittask', 'input');
route::resource('/courses', 'CoursesEvController');
route::post('/update', 'disp_task@update');
route::resource('/{request}/course-content', 'ContentcreateController');
route::resource('/gt/{request}/course-content', 'ContentcreateController');
Route::get('/I', 'ProgressController@index');
Route::get('/fdc', 'ProgressController@show');
Route::get('/x', 'ProgressController@images');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
