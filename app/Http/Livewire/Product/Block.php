<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;

class Block extends Component
{

    public $product;

    public function render()
    {
        return view('livewire.product.block');
    }
}
