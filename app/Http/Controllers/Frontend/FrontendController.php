<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Blog;
use App\Models\AddToCart;
use App\Models\Booking;
use App\Models\Contact;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Repository\CargoEcommerce;
use Auth;
use Illuminate\View\View;

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

    public function contactStore(ContactRequest $contactRequest)
    {
        try {
            Contact::create([
                'name' => $contactRequest->name,
                'email' => $contactRequest->email,
                'phone' => $contactRequest->phone,
                'message' => $contactRequest->message,
            ]);
            $this->setSuccessMessage('Contact has been successfully submitted');
            return redirect()->back();
        }catch (\Exception $exception){
            $this->setSuccessMessage($exception->getMessage());
            return redirect()->back();
        }
    }

    public function showShop(){
        $frontend_contents = $this->frontend_content->getAllData();
        return view('layouts.frontend.shop.shop',compact('frontend_contents'));
    }

    public function showProductDetails($id){
        $product = Product::where('id', $id)->with('category')->first();
        return view('layouts.frontend.shop.product-details',compact('product'));
    }

    public function showCheckout(){
        return view('layouts.frontend.shop.checkout');
    }

    public function showTracking(Request $request)
    {
//        $this->validate($request, [
//            'tracking_number' => 'required|max:6|min:6'
//        ]);

        if ($request->tracking_number){
            $parcelTracking = Booking::where('bookingId', $request->tracking_number)->first();
            return view('layouts.frontend.shop.tracking', compact('parcelTracking'));
        }else{
            $parcelTracking = '';
            return view('layouts.frontend.shop.tracking', compact('parcelTracking'));
        }
    }

    public function showLogin(){
        return view('layouts.frontend.auth.login');
    }

    public function showRegistration(){
        return view('layouts.frontend.auth.registration');
    }

    public function serviceDetails()
    {
        return view('layouts.frontend.service.service-details');
    }
    public function specializedService()
    {
        return view('layouts.frontend.service.specialized-details');
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
        if(session()->has('userId')){
            $add_to_cart->user_id = session()->get('userId');
            $add_to_cart->ip_address = $request->ip();
            $add_to_cart->product_id = $id;
            if(isset($request->quantity)){
                $add_to_cart->quantity = $request->quantity;
            }
            else{
                $add_to_cart->quantity = 1;
            }
            $add_to_cart->save();
            $this->setSuccessMessage('Added to cart successfully!');
            return redirect()->back();
        }
        else{
            $add_to_cart->ip_address = $request->ip();
            $add_to_cart->product_id = $id;
            if(isset($request->quantity)){
                $add_to_cart->quantity = $request->quantity;
            }
            else{
                $add_to_cart->quantity = 1;
            }
            $add_to_cart->save();
            $this->setSuccessMessage('Added to cart successfully!');
            return redirect()->back();
        }
    }

    public function deleteAddToCart ($id)
    {
        $add_to_cart = AddToCart::find($id);
        $add_to_cart->delete();
        $this->setSuccessMessage('Item is deleted form cart!');
        return redirect()->back();
    }
}
