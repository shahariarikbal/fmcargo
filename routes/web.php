<?php

use App\Http\Controllers\Admin\AboutUsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Frontend\CustomerController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\YoutubeController;
use App\Http\Controllers\Admin\ClearingForwardingController;
use App\Http\Controllers\Admin\DoorToDoorController;
use App\Http\Controllers\Admin\PrivacyPolicyController;
use App\Http\Controllers\Admin\SpecializedServiceController;
use App\Http\Controllers\Admin\TermConditionController;

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

//Config cache clear
Route::get('clear', function () {
    \Artisan::call('cache:clear');
    \Artisan::call('config:clear');
    \Artisan::call('route:clear');
    \Artisan::call('view:clear');
    \Artisan::call('config:cache');
   // \Artisan::call('optimize');
    dd("All clear!");
});

Route::get('/', [FrontendController::class, 'index']);
Route::get('/contact', [FrontendController::class, 'showContactUs']);
Route::post('/contact/store', [FrontendController::class, 'contactStore']);
Route::get('/shop', [FrontendController::class, 'showShop']);
Route::get('/shop/category-products/{cat_id}/{slug}', [FrontendController::class, 'showCategoryProduct']);
Route::get('/product/details/{id}', [FrontendController::class, 'showProductDetails']);
Route::get('/checkout', [FrontendController::class, 'showCheckout']);

Route::get('/tracking', [FrontendController::class, 'showTracking']);

Route::get('/customer/login', [FrontendController::class, 'showLogin']);
Route::get('/registration', [FrontendController::class, 'showRegistration']);
Route::get('/blog/details/{id}/{slug}', [FrontendController::class, 'blogDetails']);
Route::get('/door/to/door/service', [FrontendController::class, 'serviceDetails']);
Route::get('/cf/service', [FrontendController::class, 'cfService']);
Route::get('/specialized/service', [FrontendController::class, 'specializedService']);
Route::get('/product/add-to-cart/{id}', [FrontendController::class, 'addToCart']);
Route::get('/delete/add-to-cart/{id}', [FrontendController::class, 'deleteAddToCart']);
Route::get('/about', [FrontendController::class, 'showAbout']);
Route::get('/terms/condition', [FrontendController::class, 'showTermsCondition']);
Route::get('/privacy/policy', [FrontendController::class, 'showprivacyPolicy']);

Route::post('/customer/register', [CustomerController::class, 'customerRegister']);
Route::post('/customer/login', [CustomerController::class, 'customerLogin']);
Route::get('/customer/logout', [CustomerController::class, 'customerLogout']);
Route::post('/order/complete', [CustomerController::class, 'completeOrder']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('layouts.admin.home.index');
    })->name('dashboard');

    /************ Customer Booking List ************/
    Route::group(['prefix' => 'customer'], function (){
        Route::get('/booking/list', [BookingController::class, 'bookingList'])->name('customer.booking.list');
        Route::get('/booking/create', [BookingController::class, 'customerBookingCreate'])->name('customer.booking');
        Route::post('/booking/store', [BookingController::class, 'customerBookingStore'])->name('customer.booking.store');
        Route::get('/booking/edit/{id}', [BookingController::class, 'customerBookingEdit'])->name('customer.booking.edit');
        Route::post('/booking/update/{id}', [BookingController::class, 'customerBookingUpdate'])->name('customer.booking.update');
        Route::get('/booking/view/{id}', [BookingController::class, 'customerBookingView'])->name('customer.booking.view');
        Route::get('/booking/delete/{id}', [BookingController::class, 'customerBookingDelete'])->name('customer.booking.delete');
        Route::get('/booking/pending/{id}', [BookingController::class, 'customerBookingPending'])->name('customer.booking.pending');
        Route::get('/booking/warehouse/{id}', [BookingController::class, 'customerBookingWarehouse'])->name('customer.booking.warehouse');
        Route::get('/booking/shipping/{id}', [BookingController::class, 'customerBookingShipping'])->name('customer.booking.shipping');
        Route::get('/booking/customs/{id}', [BookingController::class, 'customerBookingCustoms'])->name('customer.booking.customs');
        Route::get('/booking/bd/warehouse/{id}', [BookingController::class, 'customerBookingBDWarehouse'])->name('customer.booking.bd-warehouse');
        Route::get('/booking/delivered/{id}', [BookingController::class, 'customerBookingDelivered'])->name('customer.booking.delivered');
    });

    /************ Ecommerce route list ************/
    Route::group(['prefix' => 'category'], function (){
        Route::get('/list', [CategoryController::class, 'categoryList'])->name('category.list');
        Route::get('/create', [CategoryController::class, 'categoryCreate'])->name('category.create');
        Route::post('/store', [CategoryController::class, 'categoryStore'])->name('category.store');
        Route::post('/update/{id}', [CategoryController::class, 'categoryUpdate'])->name('category.update');
        Route::get('/edit/{id}', [CategoryController::class, 'categoryEdit'])->name('category.edit');
        Route::get('/active/{id}', [CategoryController::class, 'categoryActive'])->name('category.active');
        Route::get('/inactive/{id}', [CategoryController::class, 'categoryInactive'])->name('category.inactive');
        Route::get('/delete/{id}', [CategoryController::class, 'categoryDelete'])->name('category.delete');
    });

    Route::group(['prefix' => 'brand'], function (){
        Route::get('/list', [BrandController::class, 'brandList'])->name('brand.list');
        Route::get('/create', [BrandController::class, 'brandCreate'])->name('brand.create');
        Route::post('/store', [BrandController::class, 'brandStore'])->name('brand.store');
        Route::post('/update/{id}', [BrandController::class, 'brandUpdate'])->name('brand.update');
        Route::get('/edit/{id}', [BrandController::class, 'brandEdit'])->name('brand.edit');
        Route::get('/active/{id}', [BrandController::class, 'brandActive'])->name('brand.active');
        Route::get('/inactive/{id}', [BrandController::class, 'brandInactive'])->name('brand.inactive');
        Route::get('/delete/{id}', [BrandController::class, 'brandDelete'])->name('brand.delete');
    });

    Route::group(['prefix' => 'product'], function (){
        Route::get('/list', [ProductController::class, 'productList'])->name('product.list');
        Route::get('/create', [ProductController::class, 'productCreate'])->name('product.create');
        Route::post('/store', [ProductController::class, 'productStore'])->name('product.store');
        Route::post('/update/{id}', [ProductController::class, 'productUpdate'])->name('product.update');
        Route::get('/edit/{id}', [ProductController::class, 'productEdit'])->name('product.edit');
        Route::get('/active/{id}', [ProductController::class, 'productActive'])->name('product.active');
        Route::get('/inactive/{id}', [ProductController::class, 'productInactive'])->name('product.inactive');
        Route::get('/delete/{id}', [ProductController::class, 'productDelete'])->name('product.delete');
    });

    Route::group(['prefix' => 'settings'], function (){
        Route::get('/show/{id}', [SettingController::class, 'showSetting'])->name('setting.show');
        Route::post('/update/{id}', [SettingController::class, 'updateSetting'])->name('setting.update');
        Route::get('/credential/edit', [SettingController::class, 'editCredential'])->name('edit.credential');
        Route::post('/credential/update', [SettingController::class, 'updateCredential'])->name('update.credential');

    });

    Route::group(['prefix' => 'service'], function (){
        Route::get('/list', [ServiceController::class, 'serviceList'])->name('services');
        Route::get('/add', [ServiceController::class, 'serviceAdd'])->name('service.add');
        Route::post('/store', [ServiceController::class, 'serviceStore'])->name('service.store');
        Route::get('/edit/{id}', [ServiceController::class, 'serviceEdit'])->name('service.edit');
        Route::post('/update/{id}', [ServiceController::class, 'serviceUpdate'])->name('service.update');
        Route::get('/destroy/{id}', [ServiceController::class, 'serviceDelete'])->name('service.delete');
    });

    Route::group(['prefix' => 'blog'], function (){
        Route::get('/list', [BlogController::class, 'blogList'])->name('blog.list');
        Route::get('/add', [BlogController::class, 'blogAdd'])->name('blog.add');
        Route::post('/store', [BlogController::class, 'blogStore'])->name('blog.store');
        Route::get('/edit/{id}', [BlogController::class, 'blogEdit'])->name('blog.edit');
        Route::post('/update/{id}', [BlogController::class, 'blogUpdate'])->name('blog.update');
        Route::get('/destroy/{id}', [BlogController::class, 'blogDelete'])->name('blog.delete');
    });

    Route::group(['prefix' => 'testimonial'], function (){
        Route::get('/list', [TestimonialController::class, 'testimonialList'])->name('testimonial.list');
        Route::get('/add', [TestimonialController::class, 'testimonialAdd'])->name('testimonial.add');
        Route::post('/store', [TestimonialController::class, 'testimonialStore'])->name('testimonial.store');
        Route::get('/edit/{id}', [TestimonialController::class, 'testimonialEdit'])->name('testimonial.edit');
        Route::post('/update/{id}', [TestimonialController::class, 'testimonialUpdate'])->name('testimonial.update');
        Route::get('/destroy/{id}', [TestimonialController::class, 'testimonialDelete'])->name('testimonial.delete');
    });

    Route::group(['prefix' => 'cf'], function (){
        Route::get('/edit/{id}', [ClearingForwardingController::class, 'cfEdit'])->name('c_&_f.edit');
        Route::post('/update/{id}', [ClearingForwardingController::class, 'cfUpdate'])->name('c_&_f.update');
    });

    Route::group(['prefix' => 'specialized_service'], function (){
        Route::get('/edit/{id}', [SpecializedServiceController::class, 'specializedEdit'])->name('specialized.edit');
        Route::post('/update/{id}', [SpecializedServiceController::class, 'specializedUpdate'])->name('specialized.update');
    });

    Route::group(['prefix' => 'door_to_door'], function (){
        Route::get('/edit/{id}', [DoorToDoorController::class, 'doorEdit'])->name('door.edit');
        Route::post('/update/{id}', [DoorToDoorController::class, 'doorUpdate'])->name('door.update');
    });

    Route::group(['prefix' => 'about_us'], function (){
        Route::get('/edit/{id}', [AboutUsController::class, 'aboutUsEdit'])->name('about_us.edit');
        Route::post('/update/{id}', [AboutUsController::class, 'aboutUsUpdate'])->name('about_us.update');
    });

    Route::group(['prefix' => 'term_condition'], function (){
        Route::get('/edit/{id}', [TermConditionController::class, 'termConditionEdit'])->name('term_condition.edit');
        Route::post('/update/{id}', [TermConditionController::class, 'termConditionUpdate'])->name('term_condition.update');
    });

    Route::group(['prefix' => 'privacy_policy'], function (){
        Route::get('/edit/{id}', [PrivacyPolicyController::class, 'privacyPolicyEdit'])->name('privacy_policy.edit');
        Route::post('/update/{id}', [PrivacyPolicyController::class, 'privacyPolicyUpdate'])->name('privacy_policy.update');
    });


    Route::group(['prefix' => 'admin/order'], function (){
        Route::get('/list', [OrderController::class, 'adminOrderList'])->name('admin.order.list');
        Route::get('/view/{id}', [OrderController::class, 'adminOrderView'])->name('admin.order.view');
        Route::get('/delete/{id}', [OrderController::class, 'adminOrderDelete'])->name('admin.order.delete');
        Route::get('/invoice/download/{id}', [OrderController::class, 'orderInvoiceDownload'])->name('admin.order.invoice.download');
    });

    // Register customer controller
    Route::get('/admin/customer/list', [UserController::class, 'customerList'])->name('admin.customer.list');
    Route::get('/admin/customer/delete/{id}', [UserController::class, 'customerDelete'])->name('admin.customer.delete');

    //Website settings
    Route::get('/sliders', [UserController::class, 'sliders'])->name('sliders');
    Route::get('/slider/create', [UserController::class, 'sliderCreate'])->name('slider.create');
    Route::post('/slider/store', [UserController::class, 'sliderStore'])->name('slider.store');
    Route::get('/slider/edit/{id}', [UserController::class, 'sliderEdit'])->name('slider.edit');
    Route::post('/slider/update/{id}', [UserController::class, 'sliderUpdate'])->name('slider.update');
    Route::get('/slider/delete/{id}', [UserController::class, 'sliderDelete'])->name('slider.delete');

    Route::get('/youtube/list', [YoutubeController::class, 'youtubeList'])->name('youtube.list');
    Route::get('/youtube/create', [YoutubeController::class, 'youtubeCreate'])->name('youtube.create');
    Route::post('/youtube/store', [YoutubeController::class, 'youtubeStore'])->name('youtube.store');
    Route::get('/youtube/edit/{id}', [YoutubeController::class, 'youtubeEdit'])->name('youtube.edit');
    Route::post('/youtube/update/{id}', [YoutubeController::class, 'youtubeUpdate'])->name('youtube.update');
    Route::get('/youtube/delete/{id}', [YoutubeController::class, 'youtubeDelete'])->name('youtube.delete');

    // Route::get('/door/to/door', [UserController::class, 'doorToDoor'])->name('door.to.door');
    // Route::get('/specialized/service', [UserController::class, 'specializedService'])->name('specialized.service');
});
