<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Stripe;
use Session;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function payment($id){

        $product = Product::find($id);
        return view('product.payment', compact('product'));
    }

    public function stripe_payment(Request $request){
        $product = Product::find($request->product_id);
        Stripe\Stripe::setApiKey(env('stripe_secrete_key'));
        $charge =  Stripe\Charge::create([
            'source' => $request->stripe_token,
            'currency' => 'USD',
            'amount' => $product->product_price * 100,
            'description' => 'Product Price',
            ]);
            Session::flash('success', 'Payment Successfull!');
           
            return back();
    }
}
