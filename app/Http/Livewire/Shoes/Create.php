<?php

namespace App\Http\Livewire\Shoes;

use App\Events\UserLog;
use Livewire\Component;
use App\Models\Shoe;

class Create extends Component
{
    public $shoe_name, $shoe_brand, $price, $color;

    public function addShoe() {
        $this->validate([
            'shoe_name'             =>          ['required', 'string', 'max:255'],
            'shoe_brand'            =>          ['required', 'string', 'max:255'],
            'price'                =>          ['required', 'string', 'max:255'],
            'color'                =>          ['required', 'string', 'max:255'],
        ]);

        shoe::create([
            'shoe_name'             =>      $this->shoe_name,
            'shoe_brand'            =>      $this->shoe_brand,
            'price'                =>      $this->price,
            'color'                =>      $this->color,
        ]);

        $log_entry = 'Added Shoe ' .$this->shoe_name;
        event(new UserLog($log_entry));

        return redirect('/shoe')->with('shoe', 'Added Successfully');
    }

   


    public function render()
    {
        return view('livewire.shoes.create');
    }
}
