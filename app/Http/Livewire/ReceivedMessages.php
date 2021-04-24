<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Message;

class ReceivedMessages extends Component
{   
    public $item;
    public $message;

    protected $listeners = [
        'refreshParent' => '$refresh'
    ];
    
    public function delete(Message $message) {
        $message->delete();
    }

    public function answer($item) {

        $this->item = $item;

        $this->dispatchBrowserEvent('openModal');

    }

    public function send() {

        $sendMessage = Message::create([
            'user_id' => auth()->id(),
            'to' => $this->item,
            'message' => $this->message,
        ]);

        $user = User::find($this->item);
        $user->notify(new Messages($this->message, auth()->id()));

        $this->dispatchBrowserEvent('closeModal');        
        $this->message = '';
    }

    public function render()
    {   
        $messages = Message::where('to', auth()->id())->latest()->get();

        return view('livewire.received-messages')->with('messages', $messages);
    }
}
