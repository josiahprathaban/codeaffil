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
use App\Models\Customer;

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
Route::get('/login', [LoginController::class, 'login']);
Route::get('/register', [LoginController::class, 'register']);
Route::get('/login/redirect', [LoginController::class, 'redirect']);
Route::get('/compare/{title}', [CompareController::class, 'index']);
Route::get('/single_product/{id}', [SingleProdecutController::class, 'index']);
Route::get('/singleproduct/redirect/{id}', [SingleProdecutController::class, 'no_of_clicks']);
Route::get('/products/{filterby?}/{value?}', [ProductsViewController::class, 'index']);
Route::post('/product/searchby', [ProductsViewController::class, 'search']);
Route::get('/admin', function () {
    return view('admin.dashbord');
});

Route::get('/user_verified/{email}', [UserController::class, 'verified']);
Route::get('/email_verify/{email}', [UserController::class, 'verifying']);

Route::get('/contact', [SendEmailController::class, 'index']);
Route::post('/sendemail/send', [SendEmailController::class, 'send']);

Route::get('/admin', [DashboardController::class, 'dashBoard']);

Route::get('/admin/add-product', [ProductController::class, 'addProduct'])->name('product.add');
Route::post('/admin/add-product', [ProductController::class, 'addProductSubmit'])->name('product.addsubmit');
Route::get('/admin/all-products', [ProductController::class, 'getProducts']);
Route::post('/admin/all-products', [ProductController::class, 'getProducts'])->name('product.get');
Route::get('/admin/single-product/{id}', [ProductController::class, 'getProductById'])->name('product.getbyid');
Route::get('/admin/delete-product/{id}', [ProductController::class, 'deleteProduct'])->name('product.delete');
Route::get('/admin/edit-product/{id}', [ProductController::class, 'editProduct'])->name('product.edit');
Route::post('/admin/update-product', [ProductController::class, 'updateProduct'])->name('product.update');

Route::post('/admin/add-brands', [BrandController::class, 'addBrandSubmit'])->name('brand.addsubmit');
Route::get('/admin/brands', [BrandController::class, 'getBrands'])->name('brand.get');
Route::post('/admin/brands', [BrandController::class, 'getBrands'])->name('brand.search');
Route::get('/admin/delete-brand/{id}', [BrandController::class, 'deleteBrand'])->name('brand.delete');
// Route::get('/edit-brand/{id}', [BrandController::class, 'editBrand'])->name('brand.edit');
Route::post('/admin/update-brand', [BrandController::class, 'updateBrand'])->name('brand.update');

Route::post('/admin/add-categories', [CategoryController::class, 'addCategorySubmit'])->name('category.addsubmit');
Route::get('/admin/categories', [CategoryController::class, 'getCategories'])->name('category.get');
Route::post('/admin/categories', [CategoryController::class, 'getCategories'])->name('category.search');
Route::get('/admin/delete-category/{id}', [CategoryController::class, 'deleteCategory'])->name('category.delete');
Route::post('/admin/update-category', [CategoryController::class, 'updateCategory'])->name('category.update');

Route::post('/admin/add-subcategories', [SubCategoryController::class, 'addSubCategorySubmit'])->name('subcategory.addsubmit');
Route::get('/admin/subcategories', [SubCategoryController::class, 'getSubCategories'])->name('subcategory.get');
Route::post('/admin/subcategories', [SubCategoryController::class, 'getSubCategories'])->name('subcategories.get');
Route::get('/admin/delete-subcategory/{id}', [SubCategoryController::class, 'deleteSubCategory'])->name('subcategory.delete');
Route::post('/admin/update-subcategory', [SubCategoryController::class, 'updateSubCategory'])->name('subcategory.update');

Route::post('/admin/ecommerces', [EcommerceController::class, 'addEcommerceSubmit'])->name('ecommerce.addsubmit');
Route::get('/admin/ecommerces', [EcommerceController::class, 'getEcommerces'])->name('ecommerce.get');
Route::post('/admin/update-ecommerce', [EcommerceController::class, 'updateEcommerce'])->name('ecommerce.update');

Route::get('/admin/add-admin', [UserController::class, 'addAdmin'])->name('admin.add');
Route::post('/admin/add-admin', [UserController::class, 'addAdminSubmit'])->name('admin.addsubmit');
Route::get('/admin/all-admin', [UserController::class, 'getAdmins']);
Route::get('/admin/admin-profile', [UserController::class, 'adminProfile']);
Route::post('/admin/admin-profile-add', [UserController::class, 'admin_info_add'])->name('admin.addprofile');
Route::post('/admin/admin-profile-update', [UserController::class, 'admin_info_update'])->name('admin.updateprofile');
Route::post('/admin/admin-profile-uuload', [UserController::class, 'admin_profile_upload'])->name('admin.uploadprofile');

Route::get('/admin/hot-deals', [HotDealsController::class, 'getHotDeals']);
Route::post('/admin/hot-deals', [HotDealsController::class, 'getHotDeals'])->name('hotdeals.get');
Route::post('/admin/add-hot-deals', [HotDealsController::class, 'addHotDealSubmit'])->name('hotdeal.addsubmit');
Route::post('/admin/update-hot-deals', [HotDealsController::class, 'updateHotdeal'])->name('hotdeal.update');

Route::get('/admin/sliders', [SlidersController::class, 'sliders']);
Route::post('/admin/sliders', [SlidersController::class, 'addSlider'])->name('add.slider');
Route::post('/admin/update-sliders', [SlidersController::class, 'updateSlider'])->name('update.slider');

Route::get('/admin/all-customers', [UserController::class, 'getCustomers']);
Route::post('/admin/all-customers', [UserController::class, 'getCustomers'])->name('customer.filter');



Route::get('/admin/customer', function () {
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
        session()->pull('varified');
    }
    
    return redirect('/login');
});





Route::Post('_profile_upload', [UserController::class, 'profile_upload']);
Route::Post('_info_update', [UserController::class, 'info_update']);
Route::Post('_change_password', [UserController::class, 'change_password']);



