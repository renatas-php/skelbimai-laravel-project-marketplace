<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cart;

class AddToCartBtnSingle extends Component
{   
    public $product;

    public function add() {

        //$productArr = [$this->product->title, $this->product->price, 
        //$this->product->images[0], $this->product->shipping_price];
        $user_id = auth()->id();
        if(!auth()->user()) {
            $user_id = request()->ip();
        }
        Cart::create([
            'product_id' => $this->product->id,
            'user_id' => $user_id,
        ]);

        $this->emit('refreshParent');
    }
    public function render()
    {
        return view('livewire.add-to-cart-btn-single');
    }
}
