<?php

namespace App\Http\Livewire\Shoes;

use App\Events\UserLog;
use Livewire\Component;
use App\Models\Shoe;
class Delete extends Component
{

    public $shoeId;
    public function getShoeProperty() {
        return Shoe::select('id', 'shoe_name', 'shoe_brand', 'price', 'color')
            ->find($this->shoeId);
    }

    public function delete() {
        $this->shoe->delete();

        $log_entry = 'Delete Shoes: "' .$this->shoe->shoe_name . '" with and ID: ' . $this->shoe->id;
        event(new UserLog($log_entry));

        return redirect('/shoe')->with('message', 'Deleted Successfully');
    }

    public function back() {
        return redirect('/shoe');
    }
    public function render()
    {
        return view('livewire.shoes.delete');
    }
}
