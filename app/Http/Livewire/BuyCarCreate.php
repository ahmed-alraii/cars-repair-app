<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\ItemType;
use App\Models\Specification;
use App\Models\SpecificationSize;
use App\Models\TradeMark;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Session;
use Livewire\Component;


class BuyCarCreate extends Component
{

    public string $selectedBuyerType;

    public function render()
    {
        return view('livewire.buy_car_create');
    }

    public function selectedBuyerType($value): void
    {
        $this->selectedBuyerType = $value;
       // $this->render();

    }


}
