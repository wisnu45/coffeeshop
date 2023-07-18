<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProfilController;
use App\Http\Controllers\Admin\ArtikelController;
use App\Http\Controllers\Admin\AboutusController;
use App\Http\Controllers\Admin\MesageController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\OrderController;

use App\Http\Controllers\Publish\LatestProductController;
use App\Http\Controllers\Publish\DashboardController;
use App\Http\Controllers\Publish\SignupController;
use App\Http\Controllers\Publish\SigninController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;

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

/*Route::get('/', function () {
    //return view('welcome');
    return view('publish.layout');
});*/

Auth::routes();


Route::get('/','App\Http\Controllers\Publish\DashboardController@index',function () {
  // Retrieve a piece of data from the session...
  $value = session('key');

  // Specifying a default value...
  $value = session('key', 'default');

  // Store a piece of data in the session...
  session(['key' => 'value']);
})->name('home');

Route::get('/profil','App\Http\Controllers\Publish\DashboardController@profil');
Route::get('/aboutus','App\Http\Controllers\Publish\DashboardController@about');
Route::get('/contactus','App\Http\Controllers\Publish\DashboardController@contact');
Route::get('/artikels','App\Http\Controllers\Publish\DashboardController@artikels');
Route::get('/artikels/detartikel/{id}', [
  'as' => 'publish.artikels.detartikel',
    'uses' => 'App\Http\Controllers\Publish\DashboardController@detartikel'
   ]);
   Route::get('/products','App\Http\Controllers\Publish\DashboardController@products');
   Route::get('/products/detproduk/{id}', [
    'as' => 'publish.products.detproduk',
      'uses' => 'App\Http\Controllers\Publish\DashboardController@detproduk'
     ]);

     Route::get('/products/addchart/{id}', [
      'as' => 'publish.products.addchart',
        'uses' => 'App\Http\Controllers\Publish\DashboardController@addproduk'
       ]);

       Route::get('/products/chart','App\Http\Controllers\Publish\DashboardController@charts');
       Route::get('/mywish','App\Http\Controllers\Publish\DashboardController@mywish')->name('publish.product.whislist');
       Route::get('/orders','App\Http\Controllers\Publish\DashboardController@orders');
       Route::post('publish/product/checkout', 'App\Http\Controllers\Publish\DashboardController@checkout')->name('publish.product.checkout');       

Route::post('publish/product/troly', 'App\Http\Controllers\Publish\DashboardController@troly')->name('publish.product.troly');

Route::post('publish/mesages/store', 'App\Http\Controllers\Publish\MesageController@store')->name('publish.mesages.store');
Route::get('/signup','App\Http\Controllers\Publish\SignupController@signup');
Route::post('publish/signup/store', 'App\Http\Controllers\Publish\SignupController@store')->name('publish.signups.store');

Route::get('signin','App\Http\Controllers\AuthController@showFormLogin')->name('publish.signin');
Route::post('publish/signin/store', 'App\Http\Controllers\Publish\SigninController@store')->name('publish.signins.store');

Route::get('signout','App\Http\Controllers\AuthController@logout');


//oute::post('login', 'App\Http\Controllers\AuthController@login')->name('auth.login');

//Route::group(
   // ['namespace' => 'Admin','perfix' => 'admin'],
  // function(){

    
        Route::resource('posts', PostController::class);

        Route::get('admin/dashboard','App\Http\Controllers\Admin\DashboardController@index');

        Route::get('admin/categories','App\Http\Controllers\Admin\CategoryController@index');
        Route::get('admin/categories/create', 'App\Http\Controllers\Admin\CategoryController@create')->name('admin.categories.create');
        //Route::get('admin/categories/edit/{$id}', 'App\Http\Controllers\Admin\CategoryController@edit')->name('admin.categories.edit');
        Route::get('admin/categories/hapus/{$id}', 'App\Http\Controllers\Admin\CategoryController@destroy')->name('admin.categories.destroy');
        Route::post('admin/categories/store1', 'App\Http\Controllers\Admin\CategoryController@store1')->name('admin.categories.store1');
        Route::get('admin/categories/edit/{id}', [
            'as' => 'admin.categories.edit',
              'uses' => 'App\Http\Controllers\Admin\CategoryController@edit'
             ]);
        //Route::post('admin/categories/update/{id}', [CategoryController::class, 'update']);
        Route::post('admin/categories/update/{id}', [
            'as' => 'admin.categories.update',
              'uses' => 'App\Http\Controllers\Admin\CategoryController@update'
             ]);
        //}
        Route::get('admin/products/hapus/{id}', [
          'as' => 'admin.products.delete',
            'uses' => 'App\Http\Controllers\Admin\CategoryController@destroy'
           ]);
//);

        Route::get('admin/products','App\Http\Controllers\Admin\ProductController@index')->name('admin.products.show');
        Route::get('admin/products/add','App\Http\Controllers\Admin\ProductController@create')->name('admin.products.create');
        Route::post('admin/products/store', 'App\Http\Controllers\Admin\ProductController@store')->name('admin.products.store');
        Route::get('admin/products/edit/{id}', [
            'as' => 'admin.products.edit',
              'uses' => 'App\Http\Controllers\Admin\ProductController@edit'
             ]);
        Route::post('admin/products/update/{id}', [
                    'as' => 'admin.products.update',
                    'uses' => 'App\Http\Controllers\Admin\ProductController@update'
                    ]);
                    Route::get('admin/products/del/{id}', [
                      'as' => 'admin.products.delete',
                        'uses' => 'App\Http\Controllers\Admin\ProductController@destroy'
                       ]);

        Route::get('admin/profils','App\Http\Controllers\Admin\ProfilController@index');
        Route::get('admin/profils/create', 'App\Http\Controllers\Admin\ProfilController@create')->name('admin.profils.create');
        Route::post('admin/profils/store', 'App\Http\Controllers\Admin\ProfilController@store')->name('admin.profils.store');
        Route::get('admin/profils/edit/{id}', [
          'as' => 'admin.profils.edit',
            'uses' => 'App\Http\Controllers\Admin\ProfilController@edit'
           ]);
        Route::post('admin/profils/update/{id}', [
        'as' => 'admin.profils.update',
        'uses' => 'App\Http\Controllers\Admin\ProfilController@update'
        ]);
        Route::get('admin/profils/publish/{id}', [
          'as' => 'admin.profils.publish',
            'uses' => 'App\Http\Controllers\Admin\ProfilController@publish'
           ]);
        Route::get('admin/profils/unpublish/{id}', [
            'as' => 'admin.profils.unpublish',
              'uses' => 'App\Http\Controllers\Admin\ProfilController@unpublish'
             ]);
             Route::get('admin/profils/hapus/{id}', [
              'as' => 'admin.profils.delete',
                'uses' => 'App\Http\Controllers\Admin\ProfilController@destroy'
               ]);


        Route::get('admin/artikels','App\Http\Controllers\Admin\ArtikelController@index');
        Route::get('admin/artikels/create', 'App\Http\Controllers\Admin\ArtikelController@create')->name('admin.artikels.create');
        Route::post('admin/artikels/store', 'App\Http\Controllers\Admin\ArtikelController@store')->name('admin.artikels.store');
        Route::get('admin/artikels/edit/{id}', [
          'as' => 'admin.artikels.edit',
            'uses' => 'App\Http\Controllers\Admin\ArtikelController@edit'
           ]);
           Route::post('admin/artikels/update/{id}', [
            'as' => 'admin.artikels.update',
            'uses' => 'App\Http\Controllers\Admin\ArtikelController@update'
            ]);
            Route::get('admin/artikels/publish/{id}', [
              'as' => 'admin.artikels.publish',
                'uses' => 'App\Http\Controllers\Admin\ArtikelController@publish'
               ]);
            Route::get('admin/artikels/unpublish/{id}', [
                'as' => 'admin.artikels.unpublish',
                  'uses' => 'App\Http\Controllers\Admin\ArtikelController@unpublish'
                 ]);
                 Route::get('admin/artikels/hapus/{id}', [
                  'as' => 'admin.artikels.delete',
                    'uses' => 'App\Http\Controllers\Admin\ArtikelController@destroy'
                   ]);

        Route::get('admin/abouts','App\Http\Controllers\Admin\AboutusController@index');
        Route::get('admin/abouts/create', 'App\Http\Controllers\Admin\AboutusController@create')->name('admin.abouts.create');
        Route::post('admin/abouts/store', 'App\Http\Controllers\Admin\AboutusController@store')->name('admin.abouts.store');
        Route::get('admin/abouts/edit/{id}', [
          'as' => 'admin.abouts.edit',
            'uses' => 'App\Http\Controllers\Admin\AboutusController@edit'
           ]);
        Route::post('admin/abouts/update/{id}', [
        'as' => 'admin.abouts.update',
        'uses' => 'App\Http\Controllers\Admin\AboutusController@update'
        ]);
        Route::get('admin/abouts/publish/{id}', [
          'as' => 'admin.abouts.publish',
            'uses' => 'App\Http\Controllers\Admin\AboutusController@publish'
           ]);
        Route::get('admin/abouts/unpublish/{id}', [
            'as' => 'admin.abouts.unpublish',
              'uses' => 'App\Http\Controllers\Admin\AboutusController@unpublish'
             ]);
      

             Route::get('admin/users','App\Http\Controllers\Admin\UserController@index');
             Route::get('admin/mesages','App\Http\Controllers\Admin\MesageController@index');
             Route::get('admin/orders','App\Http\Controllers\Admin\OrderController@index');