<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;

class AddProductFrom extends Component
{
    use WithFileUploads;
    public $currentUrl;     
    public $product_name = " ";
    public $product_Price = " ";
    public $photo;
    public $product_Description = " "; 

    public $category_id;
    public $all_Categories;

    public function mount(){
        $this->all_Categories = Category::all();
    }
    public function save(){
        $this->validate([
            "product_name"=> "required",
            "product_Price"=> "required|numeric",
            "photo"=> "image|required|mimes:jpg,png,jpeg,pdf|max:1024",
            "product_Description"=> "required",
            "category_id"=> "required",
        ]);
        $path = $this->photo->store('public/photos');

        $product = new Product();
        $product->name = $this->product_name;
        $product->price = $this->product_Price;
        $product->image = $path;
        $product->description = $this->product_Description;
        $product->category_id = $this->category_id;
        $product->save();

        return $this->redirect('/products', navigate:true);

    }
    public function render()
    {
        $current_url = url()->current();
        $explode_url = explode("/", $current_url);
        $this->currentUrl = $explode_url[3]. ' '.$explode_url[4];
        return view('livewire.add-product-from')->layout('admin-layout');
    }
}
