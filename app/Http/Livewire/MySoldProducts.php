<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ProductSold;
use App\Models\Message;
use App\Models\User;

class MySoldProducts extends Component
{   
    public $sold;
    public $tracking_nr;
    public $delivery_company;
    public $userId;
    public $messageText;

    public function selectForTracking($sold) {
        $this->sold = $sold;
        $this->dispatchBrowserEvent('openTrackingAddModal');
    }

    public function selectForWrite($userId) {
        $this->userId = $userId;
        $this->dispatchBrowserEvent('openMsgSendModal');
    }

    public function addTracking() {

        $trackingArr = ['tracking_nr' => $this->tracking_nr, 'delivery_company' => $this->delivery_company];
        $soldProduct = ProductSold::find($this->sold);
        $soldProduct->update([
            'tracking' => $trackingArr
        ]);

    }

    public function send() {

        $sendMessage = Message::create([
            'user_id' => auth()->id(),
            'to' => $this->userId,
            'message' => $this->messageText,
        ]);

    }

    public function render()
    {
        return view('livewire.my-sold-products');
    }
}
