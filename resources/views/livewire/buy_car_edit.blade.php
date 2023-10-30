<div class=" row justify-content-center mb-3 ">


    <input type="hidden" name="id" value="{{$record->id}}">

    <div class="col-md-3 mb-2">
        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
            <div class="mdc-text-field">
                <input class="mdc-text-field__input" id="text-field-hero-input" name="lot_number"
                       value="{{$record->lot_number}}">
                <div class="mdc-line-ripple"></div>
                <label for="text-field-hero-input"
                       class="mdc-floating-label">{{__('Lot Number')}}</label>
            </div>
        </div>
        <div class="text-danger text-center">
            @error('lot_number')  {{$message}}   @enderror
        </div>
    </div>


    <div class="col-md-3 mb-2">
        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
            <div class="mdc-text-field">
                <input class="mdc-text-field__input" id="text-field-hero-input" name="total_price"
                       value="{{$record->total_price}}">
                <div class="mdc-line-ripple"></div>
                <label for="text-field-hero-input"
                       class="mdc-floating-label">{{__('Total Price')}}</label>
            </div>
        </div>
        <div class="text-danger text-center">
            @error('total_price')  {{$message}}   @enderror
        </div>
    </div>

    <div class="col-md-3 mb-2">
        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
            <div class="mdc-text-field">
                <input class="mdc-text-field__input" id="text-field-hero-input" name="shipping_price"
                       value="{{$record->shipping_price}}">
                <div class="mdc-line-ripple"></div>
                <label for="text-field-hero-input"
                       class="mdc-floating-label">{{__('Shipping Price')}}</label>
            </div>
        </div>
        <div class="text-danger text-center">
            @error('shipping_price')  {{$message}}   @enderror
        </div>
    </div>


    <div class="col-md-3 mb-2">
        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
            <div class="mdc-text-field">
                <input class="mdc-text-field__input" id="text-field-hero-input" name="advance_price"
                       value="{{$record->advance_price}}">
                <div class="mdc-line-ripple"></div>
                <label for="text-field-hero-input"
                       class="mdc-floating-label">{{__('Advance price')}}</label>
            </div>
        </div>
        <div class="text-danger text-center">
            @error('advance_price')  {{$message}}   @enderror
        </div>
    </div>


    <div class="col-md-3 mb-2">
        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
            <div class="mdc-text-field">
                <input type="date" class="mdc-text-field__input" id="text-field-hero-input" name="buy_date"
                       value="{{$record->buy_date}}">
                <div class="mdc-line-ripple"></div>
                <label for="text-field-hero-input"
                       class="mdc-floating-label">{{__('Buy Date')}}</label>
            </div>
        </div>
        <div class="text-danger text-center">
            @error('buy_date')  {{$message}}   @enderror
        </div>
    </div>


    <div class="col-md-3 mb-2 ">
        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
            <div class="mdc-text-field">
                <select class="form-control custom-select text-center"
                        wire:change="selectedBuyerType($event.target.value)" name="buyer_type">
                    <option value="">{{__('Select Buyer Type')}}</option>
                    @foreach(\App\Enums\BuyerType::cases() as $key => $buyerType)
                        <option value="{{$buyerType->value}}"
                        @if($buyerType->value == old('buyer_type')) selected
                        @elseif($buyerType->value == $record->buyer_type) selected @endif
                        > {{__($buyerType->value)}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="text-danger text-center">
            @error('buyer_type')  {{$message}}   @enderror
        </div>
    </div>


    @if($selectedBuyerType == \App\Enums\BuyerType::Client->value)
        <div class="col-md-3 mb-2">
            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                <div class="mdc-text-field">
                    <input class="mdc-text-field__input" id="text-field-hero-input" name="client_name"
                           value="{{$record->client_name}}">
                    <div class="mdc-line-ripple"></div>
                    <label for="text-field-hero-input"
                           class="mdc-floating-label">{{__('Client Name')}}</label>
                </div>
            </div>
            <div class="text-danger text-center">
                @error('client_name')  {{$message}}   @enderror
            </div>
        </div>


        <div class="col-md-3 mb-2">
            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                <div class="mdc-text-field">
                    <input class="mdc-text-field__input" id="text-field-hero-input" name="client_phone"
                           value="{{$record->clientd_phone}}">
                    <div class="mdc-line-ripple"></div>
                    <label for="text-field-hero-input"
                           class="mdc-floating-label">{{__('Client Phone')}}</label>
                </div>
            </div>
            <div class="text-danger text-center">
                @error('client_phone')  {{$message}}   @enderror
            </div>
        </div>

    @endif

    <div class="col-md-3 mb-2">
        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
            <div class="mdc-text-field">
                <input class="mdc-text-field__input" id="text-field-hero-input" name="car_name"
                       value="{{$record->car_name}}">
                <div class="mdc-line-ripple"></div>
                <label for="text-field-hero-input"
                       class="mdc-floating-label">{{__('Car Name')}}</label>
            </div>
        </div>
        <div class="text-danger text-center">
            @error('car_name')  {{$message}}   @enderror
        </div>
    </div>


    <div class="col-md-3 ">
        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
            <div class="mdc-text-field">
                <input class="mdc-text-field__input" id="text-field-hero-input" name="car_color"
                       value="{{$record->car_color}}">
                <div class="mdc-line-ripple"></div>
                <label for="text-field-hero-input"
                       class="mdc-floating-label">{{__('Car Color')}}</label>
            </div>
        </div>
        <div class="text-danger text-center">
            @error('car_color')  {{$message}}   @enderror
        </div>
    </div>

    <div class="col-md-3 mb-2">
        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
            <div class="mdc-text-field">
                <input class="mdc-text-field__input" id="text-field-hero-input" name="car_quality_number"
                       value="{{$record->car_quality_number}}">
                <div class="mdc-line-ripple"></div>
                <label for="text-field-hero-input"
                       class="mdc-floating-label">{{__('Car Quality Number')}}</label>
            </div>
        </div>
        <div class="text-danger text-center">
            @error('car_quality_number')  {{$message}}   @enderror
        </div>
    </div>

    <div class="col-md-3 mb-2">
        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
            <div class="mdc-text-field">
                <input class="mdc-text-field__input" id="text-field-hero-input" name="car_vin"
                       value="{{$record->car_vin}}">
                <div class="mdc-line-ripple"></div>
                <label for="text-field-hero-input"
                       class="mdc-floating-label">{{__('Car Vin')}}</label>
            </div>
        </div>

        <div class="text-danger text-center">
            @error('car_vin')  {{$message}}   @enderror
        </div>

    </div>

    <div class="col-md-3 mb-2">
        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
            <div class="mdc-text-field">
                <input class="mdc-text-field__input" id="text-field-hero-input" name="car_code"
                       value="{{$record->car_code}}">
                <div class="mdc-line-ripple"></div>
                <label for="text-field-hero-input"
                       class="mdc-floating-label">{{__('Car Code')}}</label>
            </div>
        </div>

        <div class="text-danger text-center">
            @error('car_code')  {{$message}}   @enderror
        </div>

    </div>

    <div class="col-md-3 mb-2 mr-2">
        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
            <div class="mdc-text-field">
                <input type="number" class="mdc-text-field__input" id="text-field-hero-input" name="car_model"
                       value="{{$record->car_model}}">
                <div class="mdc-line-ripple"></div>
                <label for="text-field-hero-input"
                       class="mdc-floating-label">{{__('Car Model')}}</label>
            </div>
        </div>
        <div class="text-danger text-center">
            @error('car_model')  {{$message}}   @enderror
        </div>
    </div>


    <div class="col-md-3 mb-2">
        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
            <div class="mdc-text-field">
                <input class="mdc-text-field__input" id="text-field-hero-input" name="car_brand"
                       value="{{$record->car_brand}}">
                <div class="mdc-line-ripple"></div>
                <label for="text-field-hero-input"
                       class="mdc-floating-label">{{__('Car Brand')}}</label>
            </div>
        </div>

        <div class="text-danger text-center">
            @error('car_brand')  {{$message}}   @enderror
        </div>

    </div>


    <div class="col-md-5  mb-2 ">
        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
            <div class="mdc-text-field">
                <input class="mdc-text-field__input" id="text-field-hero-input" name="notes"
                       value="{{$record->notes}}">
                <div class="mdc-line-ripple"></div>
                <label for="text-field-hero-input"
                       class="mdc-floating-label">{{__('Notes')}}</label>
            </div>
        </div>
        <div class="text-danger text-center">
            @error('notes')  {{$message}}   @enderror
        </div>
    </div>

</div>

<div class="row justify-content-center">
    <div class="col-md-3 mb-2 ">
        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
            <div class="mdc-text-field">
                <select class="form-control custom-select text-center" name="status">
                    <option value="">{{__('Select Status')}}</option>
                    @foreach(\App\Enums\BuyCarStatus::cases() as $key => $status)
                        <option value="{{$status->value}}"
                                @if($status->value == old('status')) selected
                                @elseif($status->value == $record->status) selected @endif
                        > {{__($status->value)}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="text-danger text-center">
            @error('buyer_type')  {{$message}}   @enderror
        </div>
    </div>

</div>

<div class="form-group text-center mt-3">
    <input type="submit" value="{{ __('Edit') }} " class="mdc-button mdc-button--raised ">
</div>

