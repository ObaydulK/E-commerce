<?php

namespace App\Livewire;

use App\Models\ShoppingCart;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ShoppingCartComponent extends Component
{

    public $cartItems = [];
    public $subtotal;
    public $vat;
    public $discount;
    public $total;

    public $pageTitle = '';

    protected $listeners = ['cartUpdated'=> 'render'];

    public function mount(){
        $this->cartItems = $this->getCartItems();
        $this->calculateTotals();
    }
    public function calculateTotals(){
        $this->subtotal = $this->cartItems->sum(function ($item) {
            return $item->quantity * $item->product->price;
        });
        $this->vat = $this->subtotal * 0.1;
        $this->discount = 5;
        $this->total = $this->subtotal + $this->vat - $this->discount;
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

    public function updateQuantity($cartItemId, $quantity){
        $cartItem = ShoppingCart::find($cartItemId);
        if($cartItem){ 
            $cartItem->quantity = $quantity;
            $cartItem->save();
            $this->dispatch('cartUpdated');
        };
    }
    public function removeItem($cartItemId, $quantity){
        $cartItem = ShoppingCart::find($cartItemId);
        if($cartItem){
            $cartItem->delete();
            $this->dispatch('cartUpdated');
        };
    }

    public function render()
    {
        $this->cartItems = $this->getCartItems();
        $this->calculateTotals();


        return view('livewire.shopping-cart-component', [
            'cartItems' => $this->cartItems
        ])->title('E-commerce | Shopping Cart');
    }
}
