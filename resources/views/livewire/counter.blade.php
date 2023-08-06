<div class="d-inline">

        <button type="button" wire:click="increment" class="btn btn-success btn-sm"
                @if($disabled) disabled @endif > +
        </button>

        <span class="text-center {{app()->getLocale() == 'ar' ? 'mr-2 ml-1' : 'ml-2 mr-2'}} font-bold">  {{$count}} </span>
        <input  type="hidden" name="quantity" value="{{$count}}"  >

        <button type="button" wire:click="decrement" class="btn btn-danger btn-sm"
                @if($disabled) disabled @endif > -
        </button>

</div>

