<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Item;
use App\Models\ItemType;
use App\Models\Specification;
use App\Models\TradeMark;
use Illuminate\Support\Collection;
use Livewire\Component;


class BuyCarEdit extends Component
{
    public Collection $itemTypes;
    public Collection $specifications;
    public Collection $categories;
    public Collection $tradeMarks;

    public Collection $specificationSizes;
    public int $itemTypeId;
    public int $categoryId;

    public Item $record;

    public function __construct($id = null)
    {

        $this->categories = Category::all();
        $this->tradeMarks = TradeMark::all();

        parent::__construct($id);

    }

    public function render()
    {
        $this->itemTypeId = $this->record->item_type_id;
        $this->categoryId = $this->record->itemType->category_id;
        $this->itemTypes = ItemType::where('category_id', $this->categoryId)->get();
        $this->specifications = Specification::where('item_type_id', $this->itemTypeId)->get();
        return view('livewire.item-edit');
    }


}
