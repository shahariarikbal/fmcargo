<?php

namespace App\Providers;

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Models\Blog;
use App\Repository\BlogRepository;
use App\Repository\BrandRepository;
use App\Repository\CargoEcommerce;
use App\Repository\EcommerceRepository;
use App\Repository\ProductRepository;
use App\Repository\ServiceRepository;
use App\Repository\SettingRepository;
use App\Repository\FrontendRepository;
use App\Models\Setting;
use Illuminate\Support\ServiceProvider;

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
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('*', function($view){
            $view->with('setting', Setting::first());
            $view->with('blogs', Blog::orderBy('id', 'desc')->select(['id', 'title', 'slug', 'image', 'created_at'])->get());
        });
    }
}
