<?php

namespace App\Http\Livewire;

use App\Models\Book;
use Livewire\Component;

class Books extends Component
{

    public $books;
    public $iniText = 'init not loaded';

    public function mount()
    {
        $this->books = Book::all();
        $this->books->load('BookChapters');
    }

    public function loadInit()
    {
        $this->iniText = 'init was loaded';
    }

    public function render()
    {
        return view('livewire.books');
    }
}
