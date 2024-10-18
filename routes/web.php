<?php

use Illuminate\Support\Facades\Route;

//Frontend
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Frontend\ProductPageController;
use App\Http\Controllers\Frontend\DashboardController;

//Backend
use App\Http\Controllers\Backend\AdminPagesController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\CountryController;
use App\Http\Controllers\Backend\StateController;
use App\Http\Controllers\Backend\DistrictController;



/*
|--------------------------------------------------------------------------
| Frontend Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[PagesController::class, 'home'])->name('homepage');
Route::get('/about',[PagesController::class, 'about'])->name('about');
Route::get('/contact-us',[PagesController::class, 'contact'])->name('contact-us');
Route::get('/404-page-not-found',[PagesController::class, 'error404'])->name('error404');

//product pages
Route::get('/all-products',[ProductPageController::class, 'allProducts'])->name('all-products');
Route::get('/product-details/{slug}',[ProductPageController::class, 'productDetails'])->name('productDetails');
Route::get('/offer-products',[ProductPageController::class, 'offerProducts'])->name('offer-products');


//user auth pages
Route::get('/user-login',[DashboardController::class, 'userLogin'])->name('user-login');
Route::get('/user-register',[DashboardController::class, 'userRegister'])->name('user-register');
Route::get('/my-dashboard',[DashboardController::class, 'userDashboard'])->name('user-dashboard');
Route::get('/my-profile',[DashboardController::class, 'userProfile'])->name('user-profile');



/*
|--------------------------------------------------------------------------
| Backend Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//admin group
Route::group(['prefix'=>'/admin'], function(){
    Route::get('/dashboard',[AdminPagesController::class,'index'])->name('admin.dashboard');
    Route::get('/blank',[AdminPagesController::class,'blank'])->name('admin.blank');

//brand
    Route::group(['prefix'=>'/brand'], function(){
        Route::get('/manage',[BrandController::class, 'index'])->name('brand.manage');
        Route::get('/trash-manage',[BrandController::class, 'trashShow'])->name('brand.trashManage');
        Route::get('/manage',[BrandController::class, 'index'])->name('brand.manage');
        Route::get('/create',[BrandController::class, 'create'])->name('brand.create');
        Route::post('/store',[BrandController::class, 'store'])->name('brand.store');
        Route::get('/edit/{id}',[BrandController::class, 'edit'])->name('brand.edit');
        Route::get('/trash/{id}',[BrandController::class, 'trash'])->name('brand.trash');
        Route::get('/update/{id}',[BrandController::class, 'update'])->name('brand.update');
        Route::get('/destroy/{id}',[BrandController::class, 'destroy'])->name('brand.destroy');
    });

//category
    Route::group(['prefix'=>'/category'], function(){
        Route::get('/manage',[CategoryController::class, 'index'])->name('category.manage');
        Route::get('/trash-manage',[CategoryController::class, 'trashShow'])->name('category.trashManage');
        Route::get('/create',[CategoryController::class, 'create'])->name('category.create');
        Route::post('/store',[CategoryController::class, 'store'])->name('category.store');
        Route::get('/edit/{id}',[CategoryController::class, 'edit'])->name('category.edit');
        Route::get('/trash/{id}',[CategoryController::class, 'trash'])->name('category.trash');
        Route::get('/update/{id}',[CategoryController::class, 'update'])->name('category.update');
        Route::get('/destroy/{id}',[CategoryController::class, 'destroy'])->name('category.destroy');
    });

//sub category
    Route::group(['prefix'=>'/sub-category'], function(){
        Route::get('/manage',[SubCategoryController::class, 'index'])->name('subCategory.manage');
        Route::get('/trash-manage',[SubCategoryController::class, 'trashShow'])->name('subCategory.trashManage');
        Route::get('/create',[SubCategoryController::class, 'create'])->name('subCategory.create');
        Route::post('/store',[SubCategoryController::class, 'store'])->name('subCategory.store');
        Route::get('/edit/{id}',[SubCategoryController::class, 'edit'])->name('subCategory.edit');
        Route::get('/trash/{id}',[SubCategoryController::class, 'trash'])->name('subCategory.trash');
        Route::get('/update/{id}',[SubCategoryController::class, 'update'])->name('subCategory.update');
        Route::get('/destroy/{id}',[SubCategoryController::class, 'destroy'])->name('subCategory.destroy');
    });

//product
    Route::group(['prefix'=>'/product'], function(){
        Route::get('/manage',[ProductController::class, 'index'])->name('product.manage');
        Route::get('/trash-manage',[ProductController::class, 'trashShow'])->name('product.trashManage');
        Route::get('/create',[ProductController::class, 'create'])->name('product.create');
        Route::post('/store',[ProductController::class, 'store'])->name('product.store');
        Route::get('/edit/{id}',[ProductController::class, 'edit'])->name('product.edit');
        Route::get('/trash/{id}',[ProductController::class, 'trash'])->name('product.trash');
        Route::get('/update/{id}',[ProductController::class, 'update'])->name('product.update');
        Route::get('/destroy/{id}',[ProductController::class, 'destroy'])->name('product.destroy');
    });

//country
    Route::group(['prefix'=>'/country'], function(){
        Route::get('/manage',[CountryController::class, 'index'])->name('country.manage');
        Route::get('/trash-manage',[CountryController::class, 'trashShow'])->name('country.trashManage');
        Route::get('/create',[CountryController::class, 'create'])->name('country.create');
        Route::post('/store',[CountryController::class, 'store'])->name('country.store');
        Route::get('/edit/{id}',[CountryController::class, 'edit'])->name('country.edit');
        Route::get('/update/{id}',[CountryController::class, 'update'])->name('country.update');
        Route::get('/trash/{id}',[CountryController::class, 'trash'])->name('country.trash');
        Route::get('/destroy/{id}',[CountryController::class, 'destroy'])->name('country.destroy');
    });

//state
    Route::group(['prefix'=>'/state'], function(){
        Route::get('/manage',[StateController::class, 'index'])->name('state.manage');
        Route::get('/trash-manage',[StateController::class, 'trashShow'])->name('state.trashManage');
        Route::get('/create',[StateController::class, 'create'])->name('state.create');
        Route::post('/store',[StateController::class, 'store'])->name('state.store');
        Route::get('/edit/{id}',[StateController::class, 'edit'])->name('state.edit');
        Route::get('/update/{id}',[StateController::class, 'update'])->name('state.update');
        Route::get('/trash/{id}',[StateController::class, 'trash'])->name('state.trash');
        Route::get('/destroy/{id}',[StateController::class, 'destroy'])->name('state.destroy');
    });

//district
    Route::group(['prefix'=>'/district'], function(){
        Route::get('/manage',[DistrictController::class, 'index'])->name('district.manage');
        Route::get('/trash-manage',[DistrictController::class, 'trashShow'])->name('district.trashManage');
        Route::get('/create',[DistrictController::class, 'create'])->name('district.create');
        Route::post('/store',[DistrictController::class, 'store'])->name('district.store');
        Route::get('/edit/{id}',[DistrictController::class, 'edit'])->name('district.edit');
        Route::get('/update/{id}',[DistrictController::class, 'update'])->name('district.update');
        Route::get('/trash/{id}',[DistrictController::class, 'trash'])->name('district.trash');
        Route::get('/destroy/{id}',[DistrictController::class, 'destroy'])->name('district.destroy');
    });


    
});

    //category to subcategory API
    Route::get('get-subcat/{id}', function($id){
        return json_encode(App\Models\SubCategory::where('category_id', $id)->get());
    });

