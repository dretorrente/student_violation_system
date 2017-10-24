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
Route::get('/elementary', function () {
    if(\Illuminate\Support\Facades\Auth::check()){
        return redirect('/elementary/home');
    }
    return view('elementary.auth.signin');
})->name('elem.signin');
Route::post('/elementary', [
    'uses'  => 'UserController@login_elem',
    'as'    => 'elem.signin'
]);
Route::group(['middleware' =>['auth.elem']], function() {

    Route::get('/elementary/home', [
        'uses'       => 'UserController@home_elem',
        'as'         => 'elem.home'
    ]);

    Route::get('/elementary/logout', [
        'uses'  => 'UserController@logout_elem',
        'as'    => 'elem.logout'
    ]);

    Route::get('/elementary/students', [
        'uses'  => 'StudentController@student_elem'
    ]);
    Route::post('/elementary/students', [
        'uses'  => 'StudentController@add_student_elem',
        'as'    => 'elem.studentadd'
    ]);
    Route::get('/elementary/section', [
        'uses'  => 'SectionController@section_elem'
    ]);
    Route::post('/elementary/section', [
        'uses'  => 'SectionController@add_section_elem',
        'as'    => 'elem.sectionadd'
    ]);
    Route::get('elementary/schoolyear',[
        'uses'  => 'SchoolYearController@schoolyear_elem'
    ]);
    Route::post('elementary/schoolyear',[
        'uses'  => 'SchoolYearController@add_schoolyear_elem',
        'as'    => 'elem.syadd'
    ]);
    Route::get('/elementary/forgot', function () {
        return view('elementary.auth.forgot');
    });

    Route::get('/elemenatary/offense', function () {
        return view('elementary.stud_offense.index');
    });
    Route::get('/elementary/records', function () {
        return view('elementary.offense_records.index');
    });
    Route::get('/elementary/users', function() {
        return view('elementary.users.index');
    });
    Route::get('/elementary/settings', function() {
        return view('elementary.admin.settings');
    });
    Route::get('/elementary/violation', function() {
        return view('elementary.violations.index');
    });

});





// junior

//Route::get('/junior', function () {
//    return view('junior.auth.signin');
//});
//Route::get('/junior/forgot', function () {
//    return view('junior.auth.forgot');
//});
//Route::get('/junior/home', function () {
//    return view('junior.admin.home');
//});
//Route::get('/junior/student', function () {
//    return view('junior.student.index');
//});
//Route::get('/junior/offense', function () {
//    return view('junior.stud_offense.index');
//});
//Route::get('/junior/records', function () {
//    return view('junior.offense_records.index');
//});
//Route::get('/junior/section', function() {
//    return view('junior.section.index');
//});
//Route::get('/junior/users', function() {
//    return view('junior.users.index');
//});
//Route::get('/junior/settings', function() {
//    return view('junior.admin.settings');
//});
//Route::get('/junior/violation', function() {
//    return view('junior.violations.index');
//});
//Route::get('/junior/schoolyear', function() {
//    return view('junior.schoolyear.index');
//});



//Route::get('/home', 'HomeController@index');

// senior

//Route::get('/senior', function () {
//    return view('senior.auth.signin');
//});
//Route::get('/forgot', function () {
//    return view('senior.auth.forgot');
//});
//Route::get('/senior/home', function () {
//    return view('senior.admin.home');
//});
//Route::get('/senior/student', function () {
//    return view('senior.student.index');
//});
//Route::get('/senior/offense', function () {
//    return view('senior.stud_offense.index');
//});
//Route::get('/senior/records', function () {
//    return view('senior.offense_records.index');
//});
//Route::get('/senior/section', function() {
//    return view('senior.section.index');
//});
//Route::get('/senior/users', function() {
//    return view('senior.users.index');
//});
//Route::get('/senior/settings', function() {
//    return view('senior.admin.settings');
//});
//Route::get('/senior/violation', function() {
//    return view('senior.violations.index');
//});
//Route::get('/senior/schoolyear', function() {
//    return view('senior.schoolyear.index');
//});
//Route::get('/senior/resetpass', function() {
//    return view('senior.resetpass.index');
//});




