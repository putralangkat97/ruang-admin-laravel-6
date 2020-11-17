<?php

// Default laravel page
Route::get('/', function () {
    return view('welcome');
});
    
Route::get('/login', function () {
    return view('admin.pages.login');
})->name('login');

Route::get('/register', function () {
    return view('admin.pages.register');
})->name('register');

// Admin Dashboard Route
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('index');

    Route::get('/alerts', function () {
        return view('admin.pages.alerts');
    })->name('alerts');

    Route::get('/buttons', function () {
        return view('admin.pages.buttons');
    })->name('buttons');

    Route::get('/dropdowns', function () {
        return view('admin.pages.dropdowns');
    })->name('dropdowns');

    Route::get('/modals', function () {
        return view('admin.pages.modals');
    })->name('modals');

    Route::get('/popovers', function () {
        return view('admin.pages.popovers');
    })->name('popovers');

    Route::get('/progress-bars', function () {
        return view('admin.pages.progress-bars');
    })->name('progress-bars');

    Route::get('/forms-basic', function () {
        return view('admin.pages.forms-basic');
    })->name('forms-basic');

    Route::get('/forms-advanced', function () {
        return view('admin.pages.forms-advanced');
    })->name('forms-advanced');

    Route::get('/simple-table', function () {
        return view('admin.pages.simple-table');
    })->name('simple-table');

    Route::get('/datatables', function () {
        return view('admin.pages.datatables');
    })->name('datatables');

    Route::get('/ui-colours', function () {
        return view('admin.pages.ui-colours');
    })->name('ui-colours');

    Route::get('/404', function () {
        return view('admin.pages.404');
    })->name('404');

    Route::get('/blank-page', function () {
        return view('admin.pages.blank-page');
    })->name('blank-page');
});