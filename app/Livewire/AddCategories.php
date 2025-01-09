<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class AddCategories extends Component
{
    public $current_url;

    public $category_name = " ";

    public function save(){
        $this->validate([
            "category_name"=> "required",
        ]);
        $Category = new Category();
        $Category->name = $this->category_name;
        $Category->save();

        return $this->redirect("/manage/catagories", navigate:true);
    }
    public function render()
    {
        $current_url = url()->current();
        $explode_url = explode("/", $current_url);
        $this->currentUrl = $explode_url[3]. ' '.$explode_url[4];
        return view('livewire.add-categories')->layout('admin-layout');
    }
}
