<?php

namespace App\Http\Livewire\Shoes;

use Livewire\Component;
use App\Models\Shoe;

class Index extends Component
{
    public function loadShoes(){
        $shoes = Shoe::orderBy('name')->get();

        return compact('shoes');
    }

    public function render()
    {
        return view('livewire.shoes.index', $this->loadShoes());
    }
}
