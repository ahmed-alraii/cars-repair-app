<div class="row justify-content-center">

    <input type="hidden" name="id" value="{{$record->id}}">

    <div class="col-md-3 ">
        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
            <div class="mdc-text-field">
                <input class="mdc-text-field__input" id="text-field-hero-input" name="name_ar"
                       value="{{$record->name_ar}}">
                <div class="mdc-line-ripple"></div>
                <label for="text-field-hero-input"
                       class="mdc-floating-label">{{__('Arabic Name')}}</label>
            </div>
        </div>

        <div class="text-danger text-center">
            @error('name_ar')  {{$message}}   @enderror
        </div>

    </div>

    <div class="col-md-3 ">
        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
            <div class="mdc-text-field">
                <input class="mdc-text-field__input" id="text-field-hero-input" name="name_en"
                       value="{{$record->name_en}}">
                <div class="mdc-line-ripple"></div>
                <label for="text-field-hero-input"
                       class="mdc-floating-label">{{__('English Name')}}</label>
            </div>
        </div>
        <div class="text-danger text-center">
            @error('name_en')  {{$message}}   @enderror
        </div>
    </div>


    <div class="col-md-3 ">
        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
            <div class="mdc-text-field">

                <select class="mdc-text-field__input form-control form-select  form-select-lg"
                        name="category_id" readonly>
                    <option value="{{$record->itemType->category_id}}" selected>
                        {{  app()->getLocale() == 'ar' ?  __($record->itemType->category->name_ar) : __($record->itemType->category->name_en)}}
                    </option>

                </select>

            </div>
        </div>
        <div class="text-danger text-center">
            @error('category_id')  {{$message}}   @enderror
        </div>
    </div>

    <div class="col-md-3">
        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
            <div class="mdc-text-field">
                <select
                        class="mdc-text-field__input form-control form-select  form-select-lg"
                        name="item_type_id" readonly="true">

                    <option value="{{$record->item_type_id}}" selected>
                        {{  app()->getLocale() == 'ar' ?  __($record->itemType->name_ar) : __($record->itemType->name_en)}}
                    </option>

                </select>


            </div>
        </div>
        <div class="text-danger text-center">
            @error('item_type_id')  {{$message}}   @enderror
        </div>
    </div>


    <div class=" row justify-content-center mb-3 mt-3">
        <div class="col-md-4 ">
            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                <div class="mdc-text-field">
                    <input class="mdc-text-field__input" id="text-field-hero-input" name="model"
                           value="{{$record->model}}">
                    <div class="mdc-line-ripple"></div>
                    <label for="text-field-hero-input" class="mdc-floating-label">{{__('Model')}}</label>
                </div>
            </div>

            <div class="text-danger text-center">
                @error('model')  {{$message}}   @enderror
            </div>
        </div>


        <div class="col-md-4">
            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                <div class="mdc-text-field">
                    <select class="mdc-text-field__input form-control form-select  form-select-lg"
                            name="trade_mark_id">
                        <option class="text-center" value="" selected>{{__('Select Trade Mark')}}</option>
                        @foreach($tradeMarks as $tradeMark)
                            <option value="{{$tradeMark->id}}"
                                    @if($record->trade_mark_id == $tradeMark->id) selected @endif>
                                {{  app()->getLocale() == 'ar' ?  __($tradeMark->name_ar) : __($tradeMark->name_en)}}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="text-danger text-center">
                @error('trade_mark_id')  {{$message}}   @enderror
            </div>
        </div>


        <div class="col-md-4 ">
            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                <div class="mdc-text-field">
                    <input class="mdc-text-field__input" id="text-field-hero-input" name="note"
                           value="{{$record->note}}">
                    <div class="mdc-line-ripple"></div>
                    <label for="text-field-hero-input" class="mdc-floating-label">{{__('Notes')}}</label>
                </div>
            </div>
            <div class="text-danger text-center">
                @error('note')  {{$message}}   @enderror
            </div>
        </div>


        @if(count($specifications) > 0)
            <div class="row justify-content-center">
                <h4 class="text-center mt-4"> {{ __('Specifications')}} : </h4>
                @foreach($specifications as $k => $spice)
                    <input type="hidden" name="specification_ids[{{$k}}]" value="{{$spice->id}}">
                    <div class="row justify-content-center mt-3 mb-3">
                        <div class="col-sm-3 mt-3">
                            <h5> {{  app()->getLocale() == 'ar' ?  __($spice->name_ar) : __($spice->name_en)}} :
                                {{$record->itemSpecifications()->where('specification_id' , $spice->id)->first()->specificationSize->size->name}} </h5>
                        </div>
                        <div class="col-sm-6">
                            <select
                                    class="mdc-text-field__input form-control form-select  form-select-lg"
                                    name="size_ids[{{$k}}]">                                        {{--   Printer --}}
                                <option class="text-center" value=""
                                        selected>{{ $spice->item_type_id == 3 ? __('Select Type') :  __('Select Size')}}</option>
                                @foreach($spice->specificationSizes as $key => $specSize)

                                    <option value="{{$specSize->id}}"
                                            @if(old("size_ids.$k") == $specSize->id )  selected @endif>
                                        {{ __($specSize->size->name) }}

                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="text-danger text-center">
                            @error("size_ids.$k") {{$message}}   @enderror
                        </div>
                    </div>
                @endforeach

            </div>
        @endif

    </div>

    <div class="form-group text-center mt-3">
        <input type="submit" value="{{ __('Update') }} " class="mdc-button mdc-button--raised ">
    </div>

</div>