<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\DB;

class UserProduct extends Component
{
    public $products = [];
    public $updateMode = false;
    public $inputs = [];
    public $i = 1;


    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs, $i);
    }

    public function remove($i)
    {
        unset($this->inputs[$i]);
    }
    
    public function store()
    {
        foreach($this->products as $p) {
            $result = Product::create([
                'name' => $p['name'],
                'price' => $p['price']
            ]);
        }
        
    }


    public function render()
    {
        $data = Product::all();
        return view('livewire.user-product', compact('data'));
    }
}
