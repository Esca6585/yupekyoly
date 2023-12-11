<?php

namespace App\Http\Controllers\FrontControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Product;
use App\Models\Message;
use Carbon\Carbon;
use App\Http\Requests\MessageRequest;


class FrontController extends Controller
{
    public function index()
    {   
        $productLasts = Product::take(4)->where('sale_type', 'New')->inRandomOrder()->get();

        $products = Product::orderByDesc('id')->paginate(100);

        if(request()->ajax()){
            return view('layouts.product-area-2', compact('products'))->render();
        }

        return view('front-end.main', compact('productLasts', 'products'));
    }
    
    public function contactUs()
    {
        return view('front-end.contact-us');
    }

    public function singleProduct($lang, Product $product, $slug)
    {
        $trendProducts = Product::take(4)->where('sale_type', 'New')->inRandomOrder()->get();
        
        return view('front-end.single-product', compact('product','trendProducts'));
    }

    public function message(MessageRequest $request)
    {
        $message = new Message;

        $message->name = ucfirst($request->name);
        $message->phone_number = $request->phone_number;
        $message->email = strtolower($request->email);
        $message->messages = $request->messages;

        $message->save();

        return back()->with('success-message', 'Your message sent successfully!');
    }

    public function addShoppingCart(Request $request)
    {
        return 'shopping-cart-dont-work';
    }
}
