<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Notifications\Messages;
use Illuminate\Notifications\Notifiable;

use App\Models\Offer;
use App\Models\Message;
use App\Models\User;

class PriceOffers extends Component
{   
    protected $listeners = [
        'refreshParent' => '$refresh'
    ];

    public $userId;
    public $messageText;

    public function delete(Offer $offer) {
        $offer->delete();
    }

    public function take() {


        $this->dispatchBrowserEvent('openOfferModal');
    }

    public function answer($userId) {

        $this->userId = $userId;

        $this->dispatchBrowserEvent('openModal');

    }

    public function send() {

        $sendMessage = Message::create([
            'user_id' => auth()->id(),
            'to' => $this->userId,
            'message' => $this->messageText,
        ]);

        $user = User::find($this->userId);
        $user->notify(new Messages($this->messageText, auth()->id()));

        $this->dispatchBrowserEvent('closeModal');        
        $this->messageText = '';
    }

    public function render()
    {   
        $priceOffers = Offer::where('user_id', auth()->id())->latest()->get();

        return view('livewire.price-offers')->with('priceOffers', $priceOffers);
    }
}
