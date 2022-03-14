<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $attributes;
    public function render()
    {
    
        return view('livewire.counter');
    }

    public $count = 0;

    public function increment()
    {
        $this->count++;
    }

    public $showDropdown = false;

    public function archive()
    {
        $this->showDropdown = false;
    }

    public function delete()
    {
        $this->showDropdown = false;
    }
}
