<?php

namespace App\Http\Livewire\Shoes;

use App\Models\Shoe;
use Livewire\Component;

class Delete extends Component
{
    public $shoeId;

    public function getShoeProperty(){
        return Shoe::select('id', 'brand', 'name', 'color', 'size')->find($this->shoeId);
    }

    public function delete(){
        $this->shoe->delete();
        return redirect('/')->with('message', 'Deleted Successfully');
    }

    public function back(){
        return redirect('/');
    }

    public function render()
    {
        return view('livewire.shoes.delete');
    }
}
