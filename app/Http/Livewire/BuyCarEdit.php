<?php

namespace App\Http\Livewire;
use App\Enums\BuyerType;
use App\Http\Requests\BuyCarRequest;
use App\Models\BuyCar;
use Illuminate\Support\Collection;
use Illuminate\Validation\Rule;
use Livewire\Component;


class BuyCarEdit extends Component
{

    public BuyCar $record ;
    public string $selectedBuyerType;


    public function mount()
    {
        $this->selectedBuyerType = $this->record->buyer_type;

    }

    public function render()
    {
        if(old('buyer_type') != null) {
            $this->selectedBuyerType = old('buyer_type');
        }

        return view('livewire.buy_car_edit');
    }

    public function selectedBuyerType($value): void
    {
        $this->selectedBuyerType = $value;

    }

}
