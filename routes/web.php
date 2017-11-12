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

//Login Routes elementary
Route::get('/', function () {

    if(\Illuminate\Support\Facades\Auth::user()['group_id']==3){
        return redirect('/elementary/home');
    }
    if(\Illuminate\Support\Facades\Auth::user()['group_id']==2){
        return redirect('/junior/home');
    }
    if(\Illuminate\Support\Facades\Auth::user()['group_id']==1){
        return redirect('/senior/home');
    }
    return view('auth.signin');
})->name('signin');

Route::post('/', [
    'uses'  => 'UserController@login',
    'as'    => 'post.signin'
]);

// Middleware for authentication elementary, junior, senior
Route::group(['middleware' =>['auth.shs']], function() {
    //elementary routes
    Route::get('/elementary/home', [
        'uses' => 'UserController@home_elem',
        'as'   => 'elem.home'
    ]);

    Route::get('/logout', [
        'uses'  => 'UserController@logout',
        'as'    => 'logout'
    ]);

    Route::get('/elementary/students', [
        'uses'  => 'StudentController@student_elem'
    ]);
    Route::post('/elementary/students', [
        'uses'  => 'StudentController@add_student_elem',
        'as'    => 'elem.studentadd'
    ]);
    Route::post('/elementary/student/update',[
        'uses' => 'StudentController@update_student_elem',
        'as'   => 'elem.updateStudent'
    ]);

    Route::get('/elementary/section', [
        'uses'  => 'SectionController@section_elem'
    ]);
    Route::post('/elementary/section', [
        'uses'  => 'SectionController@add_section_elem',
        'as'    => 'elem.sectionadd'
    ]);

    Route::post('/elementary/section/update',[
        'uses' => 'SectionController@update_section_elem',
        'as'   => 'elem.updateSection'
    ]);

    Route::match(['get', 'post'], '/elementary/section_delete/{id}',[
        'uses' => 'SectionController@delete_section_elem',
        'as'   => 'elem.deleteSection'
    ]);

    Route::get('/elementary/schoolyear',[
        'uses'  => 'SchoolYearController@schoolyear_elem'
    ]);
    Route::post('/elementary/schoolyear',[
        'uses'  => 'SchoolYearController@add_schoolyear_elem',
        'as'    => 'elem.syadd'
    ]);

    Route::post('/elementary/sy/update',[
        'uses' => 'SchoolYearController@update_sy_elem',
        'as'   => 'elem.updateSY'
    ]);

    Route::match(['get', 'post'], '/elementary/sy_delete/{id}',[
        'uses' => 'SchoolYearController@delete_sy_elem',
        'as'   => 'elem.deleteSchoolYear'
    ]);

    Route::get('/elementary/forgot', function () {
        return view('elementary.auth.forgot');
    });


    Route::get('/elementary/offense',[
        'uses'  => 'OffenseController@offense_elem',
    ]);

    Route::post('/elementary/offense',[
        'uses'  => 'OffenseController@add_offense_elem',
        'as'    => 'elem.offenseadd'
    ]);
    Route::get('/elementary/records',[
        'uses'  => 'OffenseController@offense_records_elem',
    ]);

    Route::get('/elementary/users',[
        'uses' => 'UserController@elem_management'
    ]);

    Route::match(['get', 'post'], '/elementary/users_add',[
        'uses' => 'UserController@elem_management_add',
        'as'   => 'elem.userAdd'
    ]);

    Route::get('/elementary/settings', [
        'uses' => 'UserController@setting_elem'
    ]);

    Route::post('/elementary/edit/',[
        'uses' => 'UserController@update_elem',
        'as'   => 'elem.updateSettings'
    ]);

    Route::get('/elementary/violation',[
        'uses' => 'ViolationController@violation_elem'
    ]);

    Route::post('/elementary/violation',[
        'uses' => 'ViolationController@add_violation_elem',
        'as'   => 'elem.addviolation'
    ]);

    Route::match(['get', 'post'], '/elementary/delete/{id}',[
        'uses' => 'ViolationController@delete_violation_elem',
        'as'   => 'elem.deleteViolation'
    ]);

    Route::post('/elementary/update/',[
        'uses' => 'ViolationController@update_violation_elem',
        'as'   => 'elem.updateViolation'
    ]);


    Route::get('/elementary/contacts', [
        'uses' => 'ContactController@sms_contact_elem'
    ]);

    Route::get('/elementary/compose', [
        'uses' => 'ContactController@sms_compose_elem'
    ]);

    Route::post('/elementary/contacts', [
        'uses'  => 'ContactController@add_contact_elem',
        'as'    => 'elem.contactadd'
    ]);

    //junior routes
    Route::get('/junior/home', [
        'uses' => 'UserController@home_junior',
        'as'   => 'junior.home'
    ]);

    Route::get('/junior/forgot', function () {
        return view('junior.auth.forgot');
    });
   
    Route::get('/junior/student', function () {
        return view('junior.student.index');
    });
    Route::get('/jrstud_offense', function () {
        return view('junior.stud_offense.index');
    });
    Route::get('/junior/records', function () {
        return view('junior.offense_records.index');
    });
    Route::get('/junior/section', function() {
       return view('junior.section.index');
    });
    Route::get('/junior/users', function() {
       return view('junior.users.index');
    });
    Route::get('/junior/settings', function() {
       return view('junior.admin.settings');
    });
    Route::get('/junior/violation', function() {
       return view('junior.violations.index');
    });
    Route::get('/junior/schoolyear', function() {
       return view('junior.schoolyear.index');
    });

    //senior routes
    Route::get('/senior/home', [
        'uses' => 'UserController@home_senior',
        'as'   => 'senior.home'
    ]);
    Route::get('/forgot', function () {
        return view('senior.auth.forgot');
    });

    Route::get('/senior/student', function () {
        return view('senior.student.index');
    });
    Route::get('/senior/offense', function () {
        return view('senior.stud_offense.index');
    });
    Route::get('/senior/records', function () {
        return view('senior.offense_records.index');
    });
    Route::get('/senior/section', function() {
        return view('senior.section.index');
    });
    Route::get('/senior/users', function() {
        return view('senior.users.index');
    });
    Route::get('/senior/settings', function() {
        return view('senior.admin.settings');
    });
    Route::get('/senior/violation', function() {
        return view('senior.violations.index');
    });
    Route::get('/senior/schoolyear', function() {
        return view('senior.schoolyear.index');
    });
    Route::get('/senior/resetpass', function() {
        return view('senior.resetpass.index');
    });
});






