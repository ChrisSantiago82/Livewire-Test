<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Navigation extends Component
{

    public $shownPage;

    protected $listeners = ['selectPage'];

    public function selectPage($page)
    {
        $this->shownPage = $page;
    }


    public function render()
    {
        return view('livewire.navigation');
    }
}
