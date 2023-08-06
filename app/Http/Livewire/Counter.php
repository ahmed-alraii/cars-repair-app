<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public int $count = 1;
    public bool $disabled = false;
    public function render()
    {
        return view('livewire.counter');
    }


    public function increment()
    {

        if($this->count < 20){
            $this->count++;
        }
    }

    public function decrement()
    {
        if($this->count > 1){
            $this->count--;
        }
    }

}
