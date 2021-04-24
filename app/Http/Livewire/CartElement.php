<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cart;

class CartElement extends Component
{   

    protected $listeners = [
        'refreshParent' => '$refresh'
    ];

    public function delete($id) {

        Cart::find($id)->delete();
 
    }

    public function render()
    {   
        $user_id = auth()->id();
        if(!auth()->user()) {
            $user_id = request()->ip();
        }
        $products = Cart::where('user_id', $user_id)->with('products')->latest()->get();
        return view('livewire.cart-element')->with('products', $products);
    }
}