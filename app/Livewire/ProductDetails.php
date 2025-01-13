<?php

namespace App\Livewire;

use App\Models\Product;
use App\Models\ShoppingCart;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ProductDetails extends Component
{
    public $product;
    public function mount($product_id){
        $this->product = Product::find($product_id);
    }

    public function addToCard($productId){
        $cartItem = ShoppingCart::where('user_id', Auth::id())->where('product_id', $productId)->first();
        
        if($cartItem){
            $cartItem->quantity +=1;
            $cartItem->save();
        }else{
            ShoppingCart::create([
                'user_id' => Auth::id(),
                'product_id'=> $productId,
                'quantity' => 1,
            ]);
        }
        $this->dispatch('cartUpdated');
    
    }


    public function render()
    {
        return view('livewire.product-details');
    }
}
    