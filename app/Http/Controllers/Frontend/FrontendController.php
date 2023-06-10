<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\AddToCart;
use Illuminate\Http\Request;
use App\Repository\CargoEcommerce;
use Auth;

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
        return view('layouts.frontend.home.index', compact('frontend_contents'));
    }

    public function showContactUs(){
        return view('layouts.frontend.contact.contact-us');
    }

    public function showShop(){
        $frontend_contents = $this->frontend_content->getAllData();
        return view('layouts.frontend.shop.shop',compact('frontend_contents'));
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

    public function blogDetails($id, $slug)
    {
        $blog = Blog::where('id', $id)->first();
        $relatedPosts = Blog::where('id', '!=', $blog->id)->get();
        return view('layouts.frontend.home.blog-details', compact('blog', 'relatedPosts'));
    }

    public function addToCart (Request $request, $id)
    {
        $add_to_cart = new AddToCart();
        if(Auth::check()){
            $add_to_cart->user_id = Auth::user()->id;
            $add_to_cart->product_id = $id;
            $add_to_cart->quantity = 1;
            $add_to_cart->save();
            $this->setSuccessMessage('Added to cart successfully!');
            return redirect()->back();
        }
        else{
            $add_to_cart->ip_address = $request->ip();
            $add_to_cart->product_id = $id;
            $add_to_cart->quantity = 1;
            $add_to_cart->save();
            $this->setSuccessMessage('Added to cart successfully!');
            return redirect()->back();
        }
    }
}
