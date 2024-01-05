<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CouponsController;
use App\Http\Controllers\GiftCardController;
use App\Http\Controllers\HomebannerController;
use App\Http\Controllers\OTPVerificationController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\ReservationsController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UsersController;
use App\Models\Category;
use App\Models\Slider;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $slider = Slider::where('status','Active')->get();
    $testimonial = Testimonial::where('status','Active')->get();
    return view('view/index',compact('slider','testimonial'));
})->name('home');
// Route::group(['middleware' => ['prevent-back-history','otherMiddlewares']]);
Route::get('/Menu', [HomeController::class,'index'])->name('menu');
Route::get('/Menu-List/{category}', [HomeController::class,'menuList'])->name('menu.list');
Route::get('/Reservations', [HomeController::class,'reservations'])->name('reservations');
Route::get('/Gift-Cards', [HomeController::class,'giftcards'])->name('giftcards');
Route::get('/Faq', [HomeController::class,'faq'])->name('faq');
Route::get('/About-Us', [HomeController::class,'aboutus'])->name('aboutus');
Route::get('/Contact-Us', [HomeController::class,'contactus'])->name('contactus');
Route::resource('cart',CartController::class);
Route::resource('profile',ProfileController::class);
Route::get('/userprofile', [ProfileController::class,'userprofile'])->name('userprofile');
Route::get('/profileedit', [ProfileController::class,'profileedit'])->name('profileedit');
Route::post('/profileeditsave', [ProfileController::class,'profileeditsave'])->name('profileeditsave');

Route::post('/userMessage', [ProfileController::class,'userMessage'])->name('userMessage');

Route::get('/userlogout', [ProfileController::class,'userlogout'])->name('userlogout');
Route::get('/Profile/orders', [ProfileController::class,'orders'])->name('profile.orders');
Route::get('/Profile/address', [ProfileController::class,'address'])->name('profile.address');
Route::get('/Profile/add-address', [ProfileController::class,'addAddress'])->name('address.add');

Route::get('/Login', [ProfileController::class,'login'])->name('login');
Route::post('/Login/verify', [ProfileController::class,'verifyLogin'])->name('login.verify');
Route::get('/Signup', [ProfileController::class,'Signup'])->name('Signup');
Route::get('/Forgetpassword', [ProfileController::class,'Forgetpassword'])->name('Forgetpassword');
Route::post('/otpverify', [ProfileController::class,'otpverify'])->name('otpverify');
Route::get('/loginotpverify', [OTPVerificationController::class,'loginotpverify'])->name('loginotpverify');
Route::post('/otpverifycheck', [OTPVerificationController::class,'otpverifycheck'])->name('otpverifycheck');
Route::get('/Register', [ProfileController::class,'register'])->name('usesr.register');
Route::get('/verify_email/{email}', [ProfileController::class,'verify_email'])->name('verify_email');

Route::group(['prefix' => 'admin-control'], function () {

Route::get('/', [AdminLoginController::class,'index'])->name('admin.login');
Route::post('/login/verify', [AdminLoginController::class,'postLogin'])->name('adminlogin.submit');

// Route::middleware(['authenticate'])->group( function () {
    // Route::group(['middleware' => ['auth','authenticate']], function () {

Route::get('/dashboard', [AdminController::class,'index'])->name('admin.dashboard');
Route::resource('slider', SliderController::class);
Route::post('/Home/slider/status', [SliderController::class,'status'])->name('slider.status');
Route::get('/slider/delete/{id}',[SliderController::class,'delete'])->name('slider.delete');

Route::resource('homebanner', HomebannerController::class);
Route::post('/Home/testimonial/status', [HomebannerController::class,'status'])->name('homebanner.status');
Route::get('/testimonial/delete/{id}',[HomebannerController::class,'delete'])->name('homebanner.delete');


Route::get('/Category', [CategoryController::class,'index'])->name('admin.category');
Route::get('/Category/addedit/{id?}', [CategoryController::class,'addedit'])->name('admin.addcategory');
Route::post('/Category/create', [CategoryController::class,'createCategory'])->name('create.category');
Route::get('/Category/edit/{id}', [CategoryController::class,'edit'])->name('admin.editcategory');
Route::post('/Category/update', [CategoryController::class,'update'])->name('update.category');
Route::get('/Category/delete/{id}', [CategoryController::class,'delete'])->name('delete.category');

Route::get('products',[ProductsController::class,'index'])->name('products.index');
Route::get('/Products/addedit/{id?}', [ProductsController::class,'addedit'])->name('addedit.products');
Route::get('/Products/edit/{id}', [ProductsController::class,'edit'])->name('edit.products');
Route::post('/Products/addedit/update-product', [ProductsController::class, 'update'])->name('update.product');
Route::post('/Products/addedit/create-product', [ProductsController::class, 'saveproduct'])->name('create.product');
Route::get('/Products/delete/{id}', [ProductsController::class,'delete'])->name('delete.products');


Route::resource('orders',OrdersController::class);
Route::resource('reservation',ReservationsController::class);

Route::resource('coupon',CouponsController::class);
Route::post('orders/create-coupons', [CouponsController::class,'createCoupons'])->name('createCoupons');

Route::resource('giftcards',GiftCardController::class);
Route::get('/Giftcards/Redeem', [GiftCardController::class,'redeem'])->name('giftcards.redeem');
Route::resource('users',UsersController::class);
Route::resource('reports',ReportsController::class);
Route::get('/Users/Orders', [ReportsController::class,'orders'])->name('reports.orders');
Route::get('/Users/{id}', [UsersController::class,'deleteuser'])->name('deleteuser');
Route::get('/edituser/{id}', [UsersController::class,'edituser'])->name('edituser');
 Route::post('/editsaveuser', [UsersController::class,'editsaveuser'])->name('editsaveuser');
 Route::post('/storeuser', [UsersController::class,'storeuser'])->name('storeuser');


Route::get('/Users/Customer', [ReportsController::class,'customer'])->name('reports.customer');
Route::resource('settings',SettingsController::class);
Route::get('/settings/change-password', [SettingsController::class,'changePassword'])->name('settings.changepassword');
Route::get('/productReviews', [AdminController::class,'productReviews'])->name('admin.product-reviews');
Route::get('/contactus', [AdminController::class,'contactus'])->name('admin.contactus');
Route::get('/contactusdata', [AdminController::class,'contactusdata'])->name('admin.contactusdata');
Route::get('/deleteuserdata',[AdminController::class,'deleteuserdata'])->name('deleteuserdata');
Route::post('/replymail',[AdminController::class,'replymail'])->name('replymail');

Route::get('/faq', [AdminController::class,'faq'])->name('admin.faq');
Route::get('/addfaq', [AdminController::class,'addfaq'])->name('admin.addfaq');
Route::post('/savefaq', [AdminController::class,'savefaq'])->name('admin.savefaq');
Route::get('/deletefaq',[AdminController::class,'deletefaq'])->name('deletefaq');
Route::get('/editfaq',[AdminController::class,'editfaq'])->name('editfaq');
Route::post('/updatefaq', [AdminController::class,'updatefaq'])->name('admin.updatefaq');

Route::get('/termsandCondition', [AdminController::class,'termsandCondition'])->name('admin.termsandCondition');
Route::get('/privacyPolicy', [AdminController::class,'privacyPolicy'])->name('admin.privacyPolicy');
Route::get('/refundPolicy', [AdminController::class,'refundPolicy'])->name('admin.refundPolicy');

// });



});


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
