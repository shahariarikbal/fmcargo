<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\CargoEcommerce;

class FrontendController extends Controller
{
    protected $frontend_content;

    public function __construct(CargoEcommerce $cargoEcommerce)
    {
        $this->frontend_content = $cargoEcommerce;
    }

    public function index()
    {
        $frontend_contents = $this->frontend_content->getAllData();
        //dd($frontend_contents);
        return view('layouts.frontend.home.index', compact('frontend_contents'));
    }

    public function showContactUs(){
        return view('layouts.frontend.contact.contact-us');
    }

    public function showShop(){
        return view('layouts.frontend.shop.shop');
    }

    public function showProductDetails(){
        return view('layouts.frontend.shop.product-details');
    }

    public function showCheckout(){
        return view('layouts.frontend.shop.checkout');
    }

    public function showTracking(){
        return view('layouts.frontend.shop.tracking');
    }

    public function showLogin(){
        return view('layouts.frontend.auth.login');
    }

    public function showRegistration(){
        return view('layouts.frontend.auth.registration');
    }
}
