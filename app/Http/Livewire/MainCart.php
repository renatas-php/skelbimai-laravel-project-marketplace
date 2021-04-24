<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Cart;

class MainCart extends Component
{   
    public function delete($id) {

        Cart::find($id)->delete();
        $this->emit('refreshParent');
    }

    public function render()
    {   
        $product = Cart::where('user_id', auth()->id())->latest()->get();
        $amount = $product->pluck('price')->sum();
        return view('livewire.main-cart')->with('products', $product)->with('amount', $amount);
    }
}
