<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Cart;
use App\Models\ProductSold;
use App\Models\ShippingAdress;

use Stripe\Error\Card;
use Stripe;

class CartController extends Controller
{
    public function index() {

        return view('cart.index');
        
    }

    public function show(Product $product) {

        return view('cart.product')->with('product', $product);
    }

    public function store(Request $request) {

        if($request->filled('name') && $request->name != '' 
        && $request->filled('city') && $request->city != '' 
        && $request->filled('adress') && $request->adress != '') {
            
            $oldAdress = ShippingAdress::where('user_id', auth()->id())->firstOrFail();
            if(!empty($oldAdress)) {
                $oldAdress->delete();
            }

            $newAdress = ShippingAdress::create([
                'user_id' => auth()->id(),
                'name' => $request->name,
                'phone' => $request->phone,
                'adress' => $request->adress,
                'city' => $request->city,
                'post' => $request->post
            ]);

        }

        $carts = Cart::where('user_id', auth()->id())->get();
        //dd($carts);
        foreach($carts as $cart) {
            
            $insertSold = ProductSold::create([
                    'user_id' => auth()->id(),
                    'seller_id' => $cart->products[0]['user_id'],
                    'product_id' => $cart->products[0]['id'],
                    'price' => $cart->products[0]['price'],
                    'qty' => 1,
                    'status' => false
                ]);

           // $productQty = $cart->products[0]['qty'];

            //$cart->products[0]->update([
            //    'qty' => $productQty - 1
            //]);

            
            //$cart->delete();
        }

        try{
        
            $charge = Stripe::charges()->create([
                    'amount' => 200,
                    'currency' => 'EUR',
                    'source' => $request->stripeToken,
                    'description' => 'uzsakymas',
    
            ]);
    
        } catch (Exception $e){
    
        }
        
    }
}
