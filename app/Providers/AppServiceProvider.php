<?php

namespace App\Providers;

use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\YoutubeController;
use App\Http\Controllers\Admin\ClearingForwardingController;
use App\Http\Controllers\Admin\DoorToDoorController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Admin\SpecializedServiceController;
use App\Models\Blog;
use App\Models\AddToCart;
use App\Repository\BlogRepository;
use App\Repository\BrandRepository;
use App\Repository\CargoEcommerce;
use App\Repository\EcommerceRepository;
use App\Repository\ProductRepository;
use App\Repository\ServiceRepository;
use App\Repository\SettingRepository;
use App\Repository\FrontendRepository;
use App\Repository\TestimonialRepository;
use App\Models\Setting;
use App\Repository\AboutUsRepository;
use App\Repository\YoutubeVideoRepository;
use App\Repository\ClearingForwardingRepository;
use App\Repository\DoorToDoorRepository;
use App\Repository\SpecializedServiceRepository;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Request;
use Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->when(BrandController::class)->needs(CargoEcommerce::class)->give(function (){
            return new BrandRepository;
        });

        $this->app->when(CategoryController::class)->needs(CargoEcommerce::class)->give(function (){
            return new EcommerceRepository;
        });

        $this->app->when(ProductController::class)->needs(CargoEcommerce::class)->give(function (){
            return new ProductRepository;
        });

        $this->app->when(SettingController::class)->needs(CargoEcommerce::class)->give(function (){
            return new SettingRepository;
        });

        $this->app->when(ServiceController::class)->needs(CargoEcommerce::class)->give(function (){
            return new ServiceRepository();
        });

        $this->app->when(BlogController::class)->needs(CargoEcommerce::class)->give(function (){
            return new BlogRepository();
        });

        $this->app->when(FrontendController::class)->needs(CargoEcommerce::class)->give(function (){
            return new FrontendRepository();
        });

        $this->app->when(TestimonialController::class)->needs(CargoEcommerce::class)->give(function (){
            return new TestimonialRepository();
        });

        $this->app->when(YoutubeController::class)->needs(CargoEcommerce::class)->give(function (){
            return new YoutubeVideoRepository();
        });

        $this->app->when(ClearingForwardingController::class)->needs(CargoEcommerce::class)->give(function (){
            return new ClearingForwardingRepository();
        });

        $this->app->when(DoorToDoorController::class)->needs(CargoEcommerce::class)->give(function (){
            return new DoorToDoorRepository();
        });

        $this->app->when(SpecializedServiceController::class)->needs(CargoEcommerce::class)->give(function (){
            return new SpecializedServiceRepository();
        });

        $this->app->when(AboutUsController::class)->needs(CargoEcommerce::class)->give(function (){
            return new AboutUsRepository();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('*', function($view){
            $view->with('setting', Setting::first());
            $view->with('blogs', Blog::orderBy('id', 'desc')->select(['id', 'title_en', 'title_bn', 'slug', 'image', 'created_at'])->get());
            if(session()->has('userId')){
                $view->with('addToCart', AddToCart::where('user_id', session()->get('userId'))->orWhere('ip_address',Request::ip())->orderBy('created_at','desc')->with('product')->get());
                $view->with('addToCartCount', AddToCart::where('user_id', session()->get('userId'))->orWhere('ip_address',Request::ip())->count());
            }
            else{
                $view->with('addToCart', AddToCart::where('ip_address', Request::ip())->orWhere('user_id', session()->get('userId'))->orderBy('created_at','desc')->with('product')->get());
                $view->with('addToCartCount', AddToCart::where('ip_address', Request::ip())->orWhere('user_id', session()->get('userId'))->count());
            }
        });
    }
}
