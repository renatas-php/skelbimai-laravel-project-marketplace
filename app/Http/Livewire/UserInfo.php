<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\UserInfos;

class UserInfo extends Component
{   
    public $city;
    public $adress;
    public $post;
    public $phone;

    protected $listeners = [
        'refreshParent' => '$refresh'
    ];

    public function save() {

        $shippingArr = ['city' => $this->city, 'adress' => $this->adress, 
        'post' => $this->post, 'phone' => $this->phone];

        $insertInfo = UserInfos::create([
            'user_id' => auth()->id(),
            'shipping' => $shippingArr,
            'account' => 'lll',
            'avatar' => 'hhhh'
        ]);

        $this->emit('refreshParent');

    }

    public function render()
    {   
        return view('livewire.user-info');
    }
}
