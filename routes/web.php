<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
//use App\Models\Users;
use Illuminate\Support\Facades\validator;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\DB;
use App\Models\Grade;
use App\Models\Curses;

use App\Models\student_courses;
use App\Models\Student;

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

Route::middleware( 'LimitAcces')->group(function () {


//Route::middleware('LimitAcces')->group(function (){

//Route::get('/', function () {
//    return view('welcome');
//});

////
//    Route::get('/', function () {
//        return view('welcome');
//    })->middleware('LimitAcces');

Route::get('/', function () {
    return view('pages.index');
})->name('index');

//Route::middleware('LoginTime')->group(function (){

Route::get('/page1', function () {
    return view('pages.DONlogin');
})->name('page1');


Route::get('/page2', function () {
    return view('pages.ASlogin');
})->name('page2');

//Route::get('/courses', [HomeController::class, 'index'])->name('courses');


Route::post('/dan/login', [HomeController::class, 'login']);

Route::post('/dan/login2', [HomeController::class, 'login2']);

//});


Route::get('/db', function () {
    return DB::table('students')->get();
});

Route::get('/dashboardAsatid', function () {
    return view('pages.AsaDash');
})->name('AsaDash');

    Route::get('/dashboardDaneshjoo', function () {
        return view('pages.DanDash');
    })->name('DanDash');

Route::get('/clist', function () {

    $records = DB::table('courses')->get();
    return view('pages.clist', ["users" => $records]);
})->name('clist');


Route::get('/glist', function () {
    $records = DB::table('students')
        ->join('grades', 'grades.student_id', '=', 'students.id')
        ->select('students.first_name', 'students.last_name', 'grades.grade', 'grades.student_id')
        ->get();
    return view('pages.glist', ["users" => $records]);
})->name('glist');


Route::post('/edit/{student_id}', function ($student_id) {
    $user = Grade::find($student_id);
    return view('pages.grade')->with('user', $user);
});

Route::put('/update/{student_id}', function (Request $request, $student_id) {
    $user = Grade::find($student_id);
    $user->student_id = $request->student_id;
    $user->grade = $request->grade;
    $user->save();

    Session:: flash('message', 'نمره ثبت شد.');
    return redirect('/dashboardAsatid');

});

//send email
    Route::get('/send', [HomeController::class, 'send']);


//});
});

Route::delete('/delete/{student_id}',function($student_id) {
    $user =Grade::find($student_id);
    $user->DELETE();
    Session:: flash('message','دانشجو حدف شد.');
    return  redirect('/dashboardAsatid');
});



Route::get('/darslist', function () {
    $records = DB::table('App\Models\student_courses')
        ->join('courses', 'courses.id', '=', 'student_courses.course_id')
        ->select('courses.name', 'students_courses.student_id')
        ->get();
    return view('pages.darslist', ["users" => $records]);
})->name('darslist');
