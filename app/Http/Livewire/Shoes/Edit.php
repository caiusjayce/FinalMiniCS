<?php

namespace App\Http\Livewire\Shoes;

use App\Events\UserLog;
use App\Models\Shoe;
use Livewire\Component;

class Edit extends Component
{

    public $shoeId;
    public $shoe_name, $shoe_brand, $price, $color;
    public function mount() {
        $this->shoe_name = $this->shoe->shoe_name;
        $this->shoe_brand = $this->shoe->shoe_brand;
        $this->price = $this->shoe->price;
        $this->color = $this->shoe->color;

    }

    public function editshoe() {
        $this->validate([
            'shoe_name'             =>          ['required', 'string', 'max:255'],
            'shoe_brand'            =>          ['required', 'string', 'max:255'],
            'price'                =>          ['required', 'string', 'max:255'],
            'color'                =>          ['required', 'string', 'max:255'],
        ]);

        $this->shoe->update([
            'shoe_name'             =>      $this->shoe_name,
            'shoe_brand'            =>      $this->shoe_brand,
            'price'                =>      $this->price,
            'color'                =>      $this->color,
        ]);

        $log_entry = 'Update Shoes: "' .$this->shoe->shoe_name . '" with and ID: ' . $this->shoe->id;
        event(new UserLog($log_entry));

        return redirect('/shoe')->with('shoe', 'Updated Successfully');
    }

    public function back() {
        return redirect('/shoe');
    }
    public function getshoeProperty() {
        return shoe::find($this->shoeId);
    }

    public function render()
    {
        return view('livewire.shoes.edit');
    }
}
