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

    // \App\User::where('id', '!=', 100)->update([
    //     'password'  =>  bcrypt('123')
    // ]);

    // return 'asd';
    return view('login');
})->name('login-view');

Route::post('/login', 'LoginController@loginMasuk')->name('login-masuk');

Route::group(['middleware' => 'auth'], function() {

    Route::get('/logout', 'LoginController@logout')->name('logout');
    Route::prefix('dashboard')->group(function () {
    Route::get('/', 'DashboardController@index')->name('dashboard-index');
});
        //============PurchaseOrder
        Route::prefix('purchaseorder')->group(function () {
        Route::get('/', 'PurchaseOrderController@index')->name('purchaseorder-index');
        Route::get('/item', 'PurchaseOrderController@item')->name('purchaseorder-item');
        Route::post('/store', 'PurchaseOrderController@store')->name('purchaseorder-store');
        Route::get('/create', 'PurchaseOrderController@create')->name('purchaseorder-create');
        Route::get('/edit/{id}', 'PurchaseOrderController@Edit')->name('purchaseorder-edit');
        Route::post('/update/{id}', 'PurchaseOrderController@update')->name('purchaseorder-update');
        Route::get('/delete/{id}', 'PurchaseOrderController@delete')->name('purchaseorder-delete');
        Route::get('/export', 'PurchaseOrderController@export')->name('purchaseorder-export');
    });

        //============Production
        Route::prefix('production')->group(function () {
        Route::get('/', 'ProductionController@index')->name('production-index');
        Route::get('/item', 'ProductionController@item')->name('production-item');
        Route::post('/store', 'ProductionController@store')->name('production-store');
        Route::get('/create', 'ProductionController@create')->name('production-create');
        Route::get('/export', 'ProductionController@export')->name('production-export');
    });



        //============Delivery
        Route::prefix('delivery')->group(function () {
        Route::get('/', 'DeliveryController@index')->name('delivery-index');
        Route::get('/item', 'DeliveryController@item')->name('delivery-item');
        Route::post('/store', 'DeliveryController@store')->name('delivery-store');
        Route::get('/create', 'DeliveryController@create')->name('delivery-create');
        Route::get('/export', 'DeliveryController@export')->name('delivery-export');
    });

        //============Laporan
        Route::prefix('laporan')->group(function () {
        Route::get('/', 'LaporanController@index')->name('laporan-index');
        Route::get('/store', 'LaporanController@store')->name('laporan-store');
        Route::get('/cetak', 'LaporanController@cetak')->name('laporan-cetak');

    });

        //============Stok
        Route::prefix('stock')->group(function () {

            Route::prefix('material')->group(function () {
                Route::get('/', 'MaterialController@index')->name('material-index');
                Route::get('/create', 'MaterialController@create')->name('material-create');
                Route::post('/store', 'MaterialController@store')->name('material-store');
                Route::get('/edit/{id}', 'MaterialController@Edit')->name('material-edit');
                Route::post('/update/{id}', 'MaterialController@update')->name('material-update');
                Route::get('/delete/{id}', 'MaterialController@delete')->name('material-delete');
            });
            Route::prefix('finish-good')->group(function () {
                Route::get('/', 'FinishgoodController@index')->name('finish-good-index');
                Route::get('/create', 'FinishGoodController@create')->name('finish-good-create');
                Route::post('/store', 'FinishGoodController@store')->name('finish-good-store');
                Route::get('/edit/{id}', 'FinishGoodController@edit')->name('finish-good-edit');
                Route::post('/update/{id}', 'FinishGoodController@update')->name('finish-good-update');
                Route::get('/delete/{id}', 'FinishGoodController@delete')->name('finish-good-delete');
                Route::get('/export', 'FinishGoodController@export')->name('finish-good-export');
            });
        });

        //============User
        Route::group(['middleware' => ['auth','checkRole:1']], function() {
        Route::prefix('user')->group(function () {
            Route::get('/', 'UserController@index')->name('user-index');
            Route::get('/create', 'UserController@create')->name('user-create');
            Route::post('/store', 'UserController@store')->name('user-store');
            Route::get('/edit/{id}', 'UserController@edit')->name('user-edit');
            Route::post('/update/{id}', 'UserController@update')->name('user-update');
            Route::post('/delete/{id}', 'UserController@delete')->name('user-delete');
        });
    });
});

