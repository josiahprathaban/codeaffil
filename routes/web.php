<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\HotDealsController;
use App\Http\Controllers\SingleProdecutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SlidersController;
use App\Http\Controllers\ProductsViewController;
use App\Http\Controllers\CompareController;
use App\Http\Controllers\SendEmailController;

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

Route::get('/', [IndexController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/login/redirect', [LoginController::class, 'redirect']);
Route::get('/compare/{title}', [CompareController::class, 'index']);
Route::get('/single_product/{id}', [SingleProdecutController::class, 'index']);
Route::get('/products/{filterby?}/{value?}', [ProductsViewController::class, 'index']);
Route::post('/product/searchby', [ProductsViewController::class, 'search']);
Route::get('/admin', function () {
    return view('admin.dashbord');
});

Route::get('/contact', [SendEmailController::class, 'index']);
Route::post('/sendemail/send', [SendEmailController::class, 'send']);

Route::get('/admin', [DashboardController::class, 'dashBoard']);

Route::get('/add-product', [ProductController::class, 'addProduct'])->name('product.add');
Route::post('/add-product', [ProductController::class, 'addProductSubmit'])->name('product.addsubmit');
Route::get('/all-products', [ProductController::class, 'getProducts'])->name('product.get');
Route::get('/single-product/{id}', [ProductController::class, 'getProductById'])->name('product.getbyid');
Route::get('/delete-product/{id}', [ProductController::class, 'deleteProduct'])->name('product.delete');
Route::get('/edit-product/{id}', [ProductController::class, 'editProduct'])->name('product.edit');
Route::post('/update-product', [ProductController::class, 'updateProduct'])->name('product.update');

Route::post('/brands', [BrandController::class, 'addBrandSubmit'])->name('brand.addsubmit');
Route::get('/brands', [BrandController::class, 'getBrands'])->name('brand.get');
Route::get('/delete-brand/{id}', [BrandController::class, 'deleteBrand'])->name('brand.delete');
// Route::get('/edit-brand/{id}', [BrandController::class, 'editBrand'])->name('brand.edit');
Route::post('/update-brand', [BrandController::class, 'updateBrand'])->name('brand.update');

Route::post('/categories', [CategoryController::class, 'addCategorySubmit'])->name('category.addsubmit');
Route::get('/categories', [CategoryController::class, 'getCategories'])->name('category.get');
Route::get('/delete-category/{id}', [CategoryController::class, 'deleteCategory'])->name('category.delete');
Route::post('/update-category', [CategoryController::class, 'updateCategory'])->name('category.update');

Route::post('/subcategories', [SubCategoryController::class, 'addSubCategorySubmit'])->name('subcategory.addsubmit');
Route::get('/subcategories', [SubCategoryController::class, 'getSubCategories'])->name('subcategory.get');
Route::get('/delete-subcategory/{id}', [SubCategoryController::class, 'deleteSubCategory'])->name('subcategory.delete');
Route::post('/update-subcategory', [SubCategoryController::class, 'updateSubCategory'])->name('subcategory.update');

Route::post('/ecommerces', [EcommerceController::class, 'addEcommerceSubmit'])->name('ecommerce.addsubmit');
Route::get('/ecommerces', [EcommerceController::class, 'getEcommerces'])->name('ecommerce.get');
Route::post('/update-ecommerce', [EcommerceController::class, 'updateEcommerce'])->name('ecommerce.update');

Route::get('/add-admin', [UserController::class, 'addAdmin'])->name('admin.add');
Route::post('/add-admin', [UserController::class, 'addAdminSubmit'])->name('admin.addsubmit');
Route::get('/all-admin', [UserController::class, 'getAdmins']);
Route::get('/admin-profile', [UserController::class, 'adminProfile']);
Route::post('/admin-profile-add', [UserController::class, 'admin_info_add'])->name('admin.addprofile');
Route::post('/admin-profile-update', [UserController::class, 'admin_info_update'])->name('admin.updateprofile');

Route::get('/hot-deals', [HotDealsController::class, 'getHotDeals'])->name('hotdeals.get');
Route::post('/hot-deals', [HotDealsController::class, 'addHotDealSubmit'])->name('hotdeal.addsubmit');
Route::post('/update-hot-deals', [HotDealsController::class, 'updateHotdeal'])->name('hotdeal.update');

Route::get('/sliders', [SlidersController::class, 'sliders']);
Route::post('/sliders', [SlidersController::class, 'addSlider'])->name('add.slider');
Route::post('/update-sliders', [SlidersController::class, 'updateSlider'])->name('update.slider');

Route::get('/add', [ProductController::class, 'insert'])->name('pro.add');

Route::get('/all-customers', [UserController::class, 'getCustomers']);



Route::get('/customer', function () {
    return view('admin.customer');
});


Route::get('/profile', [UserController::class, 'getUserProfile']);



Route::get('users', [UserController::class, 'getUser']);

Route::Post('_login', [UserController::class, 'login']);

Route::Post('_register', [UserController::class, 'register']);

Route::get('/logout', function(){
    if(session()->has('user')){
        session()->pull('user');
        session()->pull('type');
        session()->pull('profile');
        session()->pull('email');
    }
    
    return redirect('/login');
});





Route::Post('_profile_upload', [UserController::class, 'profile_upload']);
Route::Post('_info_update', [UserController::class, 'info_update']);
Route::Post('_change_password', [UserController::class, 'change_password']);



