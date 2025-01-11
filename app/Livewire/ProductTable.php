<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;

class ProductTable extends Component
{
    use WithPagination;
    public $perPage=10;
    public $sortBy= "Created_at";
    public $sortDir= "DESC";
    public $search= " ";
    public $currentUrl;


    public function setSortBy($sortColum){
        if($this->sortBy == $sortColum){
            $this->sortDir = ($this->sortDir == 'ASC') ? 'DESC' : 'ASC';
            return;       
        }
        $this->sortBy = $sortColum;
        $this->sortDir = 'ASC';

    }

    public function delete($id){
        $product = Product::find($id);
        $product->delete();
        return $this->redirect('/products', navigate:true);
    }

    public function render()
    {
        $current_Url = url()->current();
        $explode_url = explode('/', $current_Url);
        
        $this->currentUrl = $explode_url[3];
        

        return view('livewire.product-table',[
            'products' => Product::with('category')->search($this->search)->orderBy($this->sortBy,$this->sortDir)->paginate($this->perPage)
        ]);
    }
}
