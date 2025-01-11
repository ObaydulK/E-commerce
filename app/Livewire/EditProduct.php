<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditProduct extends Component
{
    use WithFileUploads;
    public $currentUrl;     
    public $product_name = " ";
    public $product_Price = " ";
    public $category_id; 
    public $photo;
    public $product_Description = " "; 
    public $all_Categories;
    public $product_details;

    public function mount($id){
        $this->product_details = Product::find($id);
        $this->product_name = $this->product_details->name;
        $this->product_Price = $this->product_details->price;
        $this->category_id = $this->product_details->category_id;
        $this->photo = $this->product_details->image;
        $this->product_Description = $this->product_details->description;
        // dd($this->product_detilas);
        $this->all_Categories = Category::all();
    }

    public function update(){
        $this->validate([
            "product_name"=> "required",
            "product_Price"=> "required|numeric",
            "category_id"=> "required",
            "photo"=> "required|image|mimes:,jpg,png,jpeg,pdf|max:1024",
            "product_Description"=> "required",
        ]);
        if($this->photo && !is_string($this->photo)){
            $photoPath = $this->photo->store('photos', 'public');
        }else{
            $photoPath = $this->photo;
        } 

        $this->product_details([
            'name'=> $this->product_name,
            'price'=> $this->product_Price,
            'category_id'=> $this->category_id,
            'image' => $photoPath,
            'description'=> $this->product_Description,
        ]); 

        return $this->redirect('/products', navigate:true);

    }
    public function render()
    {
        // $current_url = url()->current();
        // $explode_url = explode("/", $current_url);
        // // dd($explode_url);
        // $this->currentUrl = $explode_url[3]. ' '.$explode_url[4];
        return view('livewire.edit-product')->layout('admin-layout');
    }
}
