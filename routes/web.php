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

Route::get('/', function () {
    return view('welcome');
});

// group guest
Route::middleware(['guest'])->group(function () {

    // route login
    Route::get('/login', 'AuthController@index')->name('login');

    Route::post('/login', 'AuthController@doLogin');

});

// group auth
Route::middleware(['auth'])->group(function () {

    // route logout
    Route::get('/logout', 'AuthController@doLogout')->name('logout');
    
    // route admin
    Route::get('/admin', 'BorrowerController@index')->name('dashboard');
    
    // borrower
    Route::get('/admin/borrower/create', 'BorrowerController@create')->name('borrower.create');

    Route::post('/admin/borrower/create/store', 'BorrowerController@store')->name('borrower.store');

    Route::get('/admin/borrower/{id}/show', 'BorrowerController@show')->name('borrower.show');

    Route::post('/admin/borrower/{id}/show/verification', 'BorrowerController@verification')->name('borrower.verification');

    Route::get('/admin/borrower/{id}/edit', 'BorrowerController@edit')->name('borrower.edit');

    Route::post('/admin/borrower/{id}/edit/update', 'BorrowerController@update')->name('borrower.update');
    
    Route::post('/admin/borrower/{id}/delete', 'BorrowerController@destroy')->name('borrower.destroy');
    
    // book
    Route::get('/admin/book', 'BookController@index')->name('book');

    Route::get('/admin/book/create', 'BookController@create')->name('book.create');

    Route::post('/admin/book/create/store', 'BookController@store')->name('book.store');

    Route::get('/admin/book/{id}/edit', 'BookController@edit')->name('book.edit');

    Route::post('/admin/book/{id}/edit/update', 'BookController@update')->name('book.update');

    Route::post('/admin/book/{id}/delete', 'BookController@destroy')->name('book.destroy');
    
    // author
    Route::get('/admin/author', 'AuthorController@index')->name('author');

    Route::get('/admin/author/create', 'AuthorController@create')->name('author.create');

    Route::post('/admin/author/create/store', 'AuthorController@store')->name('author.store');

    Route::get('/admin/author/{id}/edit', 'AuthorController@edit')->name('author.edit');

    Route::post('/admin/author/{id}/edit/update', 'AuthorController@update')->name('author.update');

    Route::post('/admin/author/{id}/delete', 'AuthorController@destroy')->name('author.destroy');
    
    // category
    Route::get('/admin/category', 'CategoryController@index')->name('category');

    Route::get('/admin/category/create', 'CategoryController@create')->name('category.create');

    Route::post('/admin/category/create/post', 'CategoryController@store')->name('category.store');

    Route::get('/admin/category/{id}/edit', 'CategoryController@edit')->name('category.edit');

    Route::post('/admin/category/{id}/edit/update', 'CategoryController@update')->name('category.update');

    Route::post('/admin/category/{id}/delete', 'CategoryController@destroy')->name('category.destroy');
    
    // book cases
    Route::get('/admin/case', 'CaseController@index')->name('case');

    Route::get('/admin/case/create', 'CaseController@create')->name('case.create');

    Route::post('/admin/case/create/store', 'CaseController@store')->name('case.store');

    Route::get('/admin/case/{id}/edit', 'CaseController@edit')->name('case.edit');

    Route::post('/admin/case/{id}/edit/update', 'CaseController@update')->name('case.update');

    Route::post('/admin/case/{id}/delete', 'CaseController@destroy')->name('case.destroy');
    
    // publisher
    Route::get('/admin/publisher', 'PublisherController@index')->name('publisher');

    Route::get('/admin/publisher/create', 'PublisherController@create')->name('publisher.create');

    Route::post('/admin/publisher/create/store', 'PublisherController@store')->name('publisher.store');

    Route::get('/admin/publisher/{id}/edit', 'PublisherController@edit')->name('publisher.edit');

    Route::post('/admin/publisher/{id}/edit/update', 'PublisherController@update')->name('publisher.update');

    Route::post('/admin/publisher/{id}/delete', 'PublisherController@destroy')->name('publisher.destroy');
    
    // major
    Route::get('/admin/major', 'MajorController@index')->name('major');

    Route::get('/admin/major/create', 'MajorController@create')->name('major.create');

    Route::post('/admin/major/create/store', 'MajorController@store')->name('major.store');

    Route::get('/admin/major/{id}/edit', 'MajorController@edit')->name('major.edit');

    Route::post('/admin/major/{id}/edit/update', 'MajorController@update')->name('major.update');

    Route::post('/admin/major/{id}/delete', 'MajorController@destroy')->name('major.destroy');
    
    // student
    Route::get('/admin/student', 'StudentController@index')->name('student');
    
    Route::get('/admin/student/create', 'StudentController@create')->name('student.create');

    Route::post('/admin/student/create/store', 'StudentController@store')->name('student.store');

    Route::get('/admin/student/{nim}/edit', 'StudentController@edit')->name('student.edit');

    Route::post('/admin/student/{nim}/edit/update', 'StudentController@update')->name('student.update');

    Route::post('/admin/student/{nim}/delete', 'StudentController@destroy')->name('student.destroy');

});
