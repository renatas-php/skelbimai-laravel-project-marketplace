<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Notifications\PriceOffers;
use Illuminate\Notifications\Notifiable;

use App\Models\Offer;
use App\Models\User;

class PriceOfferModal extends Component
{   
    public $product_id;
    public $price_offer;
    
    protected $listeners = [
        'refreshParent' => '$refresh'
    ];

    public function save() {

        $insertComment = Offer::create([
            'user_id' => auth()->id(),
            'product_id' => $this->product_id,
            'price_offer' => $this->price_offer,
        ]);

        $user = User::find(1);
        $user->notify(new PriceOffers(1, $this->price_offer));

        $this->emit('refreshParent');
        $this->cleanValues();
    }

    public function cleanValues() {

        $this->price_offer = null;
    }

    public function render()
    {
        return view('livewire.price-offer-modal');
    }
}
