@extends('layouts.admin')
@section('title' , __('Edit')  . ' ' . __('Bill')   )
@section('content')

    <div class="container">

        <h2 class="text-center mt-3">{{ __('Edit') }} {{ __('Bill') }} </h2>


        <div class="row col-1">
            <a href="{{ route('bills.index' , [app()->getLocale() , 'car_id' => request()->query('car_id') ] ) }}" class="mdc-button mdc-button--success text-white btn-sm mb-5">
                {{ __('Back') }}
            </a>
        </div>

        <form method="POST"
              action="{{ route('bills.update' , [ 'language' => app()->getLocale() ,  'bill' => $record->id]) }}"
              enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <input type="hidden" name="car_id" value="{{request()->query('car_id')}}">


            <div class="row justify-content-center mb-3">


                <input type="hidden" name="id" value="{{$record->id}}">

                <div class=" row justify-content-center mb-3">

                    <div class="col-md-4 ">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                            <div class="mdc-text-field">
                                <input class="mdc-text-field__input" id="text-field-hero-input" name="company_name"
                                       value="{{$record->company_name}}">
                                <div class="mdc-line-ripple"></div>
                                <label for="text-field-hero-input" class="mdc-floating-label">{{__('Company Name')}}</label>
                            </div>
                        </div>

                        <div class="text-danger text-center">
                            @error('company_name')  {{$message}}   @enderror
                        </div>

                    </div>

                    <div class="col-md-4 ">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                            <div class="mdc-text-field">
                                <input class="mdc-text-field__input" id="text-field-hero-input" name="company_phone"
                                       value="{{$record->company_phone}}">
                                <div class="mdc-line-ripple"></div>
                                <label for="text-field-hero-input"
                                       class="mdc-floating-label">{{__('Company Phone')}}</label>
                            </div>
                        </div>
                        <div class="text-danger text-center">
                            @error('company_phone')  {{$message}}   @enderror
                        </div>
                    </div>

                    <div class="col-md-4 ">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                            <div class="mdc-text-field">
                                <input class="mdc-text-field__input" id="text-field-hero-input" name="price"
                                     step="0.001"  value="{{$record->price}}">
                                <div class="mdc-line-ripple"></div>
                                <label for="text-field-hero-input"
                                       class="mdc-floating-label">{{__('Price')}}</label>
                            </div>
                        </div>
                        <div class="text-danger text-center">
                            @error('price')  {{$message}}   @enderror
                        </div>
                    </div>
                </div>

                <div class=" row justify-content-center mb-3">


                    <div class="col-md-4 ">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                            <div class="mdc-text-field">
                                <select class="form-control custom-select text-center" name="bill_type_id">
                                    <option value="">{{__('Select')}} {{__('Bill Type')}}</option>
                                    @foreach($billTypes as $billType)
                                        <option value="{{$billType->id}}"
                                        @if($billType->id === $record->bill_type_id)  selected @endif
                                        >{{ app()->getLocale() === 'ar' ?  $billType->name_ar : $billType->name_en}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="text-danger text-center">
                            @error('bill_type_id')  {{$message}}   @enderror
                        </div>
                    </div>


                    <div class="col-md-4 ">
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


            <div class="form-group text-center mt-3">
                <input type="submit" value="{{ __('Edit') }} " class="mdc-button mdc-button--raised ">
            </div>
        </form>
    </div>


@endsection
