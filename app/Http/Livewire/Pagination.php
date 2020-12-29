<?php

namespace App\Http\Livewire;

use App\Models\Book;
use Livewire\Component;
use Livewire\WithPagination;

class Pagination extends Component
{

    use WithPagination;


    public function mount()
    {

    }

    public function render()
    {

        return view('livewire.pagination', [
            'books' => Book::paginate(2),
        ]);

    }
}
