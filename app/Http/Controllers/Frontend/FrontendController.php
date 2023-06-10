<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('layouts.frontend.home.index');
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

    public function blogDetails($id, $slug)
    {
        $blog = Blog::where('id', $id)->first();
        $relatedPosts = Blog::where('id', '!=', $blog->id)->get();
        return view('layouts.frontend.home.blog-details', compact('blog', 'relatedPosts'));
    }
}
