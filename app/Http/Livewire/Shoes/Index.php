<?php

namespace App\Http\Livewire\Shoes;

use Livewire\Component;
use App\Models\Shoes;
use Livewire\WithPagination;

class Index extends Component
{
    public $search, $color ='all';
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function loadShoes()
     {
        $query = Shoe::orderBy('shoe_name')
            ->search($this->search);

        if ($this->color != 'all') {
            $query->where('color', $this->color);
        }

        $shoes = $query->paginate(5);

        return compact('shoes');
    }

    public function render()
    {
        return view('livewire.shoes.index', $this->loadShoes());
    }
}
