<?php

namespace App\Http\Livewire\Customer;

use App\Models\Order_item;
use App\Models\Review;
use Livewire\Component;

class CustomerReviewComponent extends Component
{
    public $order_item_id;
    public $rating;
    public $comment;

    public function mount($order_item_id)
    {
        $this->order_item_id = $order_item_id;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'rating' => 'required',
            'comment' => 'required'
        ]);
    }

    public function addReview()
    {
        $this->validate([
            'rating' => 'required',
            'comment' => 'required'
        ]);

        $review = new Review();
        $review->rating = $this->rating;
        $review->comment = $this->comment;
        $review->order_item_id = $this->order_item_id;
        $review->save();

        $orderItem = Order_item::find($this->order_item_id);
        $orderItem->rstatus = true;
        $orderItem->save();
        session()->flash('message', 'Votre avis a été ajouté avec succès !');
    }
    
    public function render()
    {
        $orderItem = Order_item::find($this->order_item_id);
        return view('livewire.customer.customer-review-component',['orderItem'=>$orderItem])->layout('layouts.base');
    }
}
