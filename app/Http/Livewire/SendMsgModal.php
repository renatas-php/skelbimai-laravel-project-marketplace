<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Message;
use App\Models\User;

use App\Notifications\Messages;
use Illuminate\Notifications\Notifiable;


class SendMsgModal extends Component
{   

    public $to;
    public $message;

    public function send() {

        $sendMessage = Message::create([
            'user_id' => auth()->id(),
            'to' => $this->to->id,
            'message' => $this->message,
        ]);

        $this->dispatchBrowserEvent('closeModal');
        
        $user = User::find($this->to->id);
        $user->notify(new Messages($this->message, auth()->id()));

        

    }

    public function render()
    {
        return view('livewire.send-msg-modal')->with('to', $this->to);
    }
}
