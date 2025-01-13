<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductIteam extends Component
{
    public $products;

    public function mount($category_id){
        if ($category_id == 0) {
            $this->products = Product::with('category')->limit(4)
            ->orderBy('created_at', 'DESC')->get();
        } else { 
            $this->products = Product::with('category')
            ->where('category_id', $category_id)
            ->limit(4)->get();
        }
        
    }
    public function render()
    {
        return view('livewire.product-iteam');
    }
}
