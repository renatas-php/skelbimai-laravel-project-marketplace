<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ProductSold;
use App\Models\Review;

class MyBuyedProducts extends Component
{   
    public $seller;
    public $rating;
    public $comment;

    public function getIdForReview($seller) {
        $this->seller = $seller;
        $this->dispatchBrowserEvent('openReviewAddModal');
    }

    public function rate() {

        $addReview = Review::create([
            'user_id' => auth()->id(),
            'rater_id' => $this->seller,
            'rating' => $this->rating,
            'comment' => $this->comment
        ]);

        $this->dispatchBrowserEvent('closeReviewAddModal');
    }

    public function render()
    {   
        $buyedProducts = ProductSold::where('user_id', auth()->id())->with('product')->latest()->get(); 
        return view('livewire.my-buyed-products')->with(compact('buyedProducts'));
    }
}
