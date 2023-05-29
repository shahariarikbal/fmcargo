<?php

namespace App\Providers;

use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Repository\BrandRepository;
use App\Repository\CargoEcommerce;
use App\Repository\EcommerceRepository;
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
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
