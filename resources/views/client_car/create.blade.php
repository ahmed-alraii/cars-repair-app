@extends('layouts.main')
@section('title' , __('Add') . ' ' .__('Client Car'))
@section('content')

    <div class="container">

        <h2 class="text-center mt-3">{{ __('Add') }} {{ __('Client Car') }} </h2>

        <a href="{{ route('cars_clients.index' , app()->getLocale()) }}"
           class="mdc-button mdc-button--success text-white btn-sm mb-4 ">
            {{ __('Back') }}
        </a>

        <div class="row justify-content-center">
            <div class="row">

            </div>
            <form method="POST" action="{{route('cars_clients.store' , app()->getLocale())}}">
                @csrf

                <div class=" row justify-content-center mb-3 ">


                    <div class="col-md-3 mb-2">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                            <div class="mdc-text-field">
                                <input class="mdc-text-field__input" id="text-field-hero-input" name="client_name"
                                       value="{{old('client_name')}}">
                                <div class="mdc-line-ripple"></div>
                                <label for="text-field-hero-input"
                                       class="mdc-floating-label">{{__('Client Name')}}</label>
                            </div>
                        </div>
                        <div class="text-danger text-center">
                            @error('client_name')  {{$message}}   @enderror
                        </div>
                    </div>

                    <div class="col-md-3 ">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                            <div class="mdc-text-field">
                                <input class="mdc-text-field__input" id="text-field-hero-input" name="car_name"
                                       value="{{old('car_name')}}">
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
                                <input class="mdc-text-field__input" id="text-field-hero-input" name="client_phone"
                                       value="{{old('client_phone')}}">
                                <div class="mdc-line-ripple"></div>
                                <label for="text-field-hero-input"
                                       class="mdc-floating-label">{{__('Client Phone')}}</label>
                            </div>
                        </div>
                        <div class="text-danger text-center">
                            @error('client_phone')  {{$message}}   @enderror
                        </div>
                    </div>

                    <div class="col-md-3 ">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                            <div class="mdc-text-field">
                                <input  type="date" class="mdc-text-field__input" id="text-field-hero-input" name="show_date"
                                       value="{{old('show_date')}}">
                                <div class="mdc-line-ripple"></div>
                                <label for="text-field-hero-input"
                                       class="mdc-floating-label">{{__('Show Date')}}</label>
                            </div>
                        </div>
                        <div class="text-danger text-center">
                            @error('show_date')  {{$message}}   @enderror
                        </div>
                    </div>

                    <div class="col-md-3 ">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                            <div class="mdc-text-field">
                                <input  type="number" step="0.01" class="mdc-text-field__input" id="text-field-hero-input" name="sell_price"
                                        value="{{old('sell_price')}}">
                                <div class="mdc-line-ripple"></div>
                                <label for="text-field-hero-input"
                                       class="mdc-floating-label">{{__('Sell Price')}}</label>
                            </div>
                        </div>
                        <div class="text-danger text-center">
                            @error('sell_price')  {{$message}}   @enderror
                        </div>
                    </div>


                    <div class="col-md-3 ">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                            <div class="mdc-text-field">
                                <input class="mdc-text-field__input" id="text-field-hero-input" name="car_color"
                                       value="{{old('car_color')}}">
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
                                       value="{{old('car_quality_number')}}">
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
                                       value="{{old('car_vin')}}">
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
                                       value="{{old('car_vin')}}">
                                <div class="mdc-line-ripple"></div>
                                <label for="text-field-hero-input"
                                       class="mdc-floating-label">{{__('Car Code')}}</label>
                            </div>
                        </div>

                        <div class="text-danger text-center">
                            @error('car_code')  {{$message}}   @enderror
                        </div>

                    </div>

                    <div class="col-md-3 ">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                            <div class="mdc-text-field">
                                <input type="number" class="mdc-text-field__input" id="text-field-hero-input" name="car_model"
                                       value="{{old('car_model')}}">
                                <div class="mdc-line-ripple"></div>
                                <label for="text-field-hero-input"
                                       class="mdc-floating-label">{{__('Car Model')}}</label>
                            </div>
                        </div>
                        <div class="text-danger text-center">
                            @error('car_model')  {{$message}}   @enderror
                        </div>
                    </div>



                    <div class="col-md-3 ">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                            <div class="mdc-text-field">
                                <input class="mdc-text-field__input" id="text-field-hero-input" name="car_brand"
                                       value="{{old('car_brand')}}">
                                <div class="mdc-line-ripple"></div>
                                <label for="text-field-hero-input"
                                       class="mdc-floating-label">{{__('Car Brand')}}</label>
                            </div>
                        </div>

                        <div class="text-danger text-center">
                            @error('car_brand')  {{$message}}   @enderror
                        </div>

                    </div>

                    <div class="col-md-5 ">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                            <div class="mdc-text-field">
                                <input class="mdc-text-field__input" id="text-field-hero-input" name="notes"
                                       value="{{old('notes')}}">
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
                    <input type="submit" value="{{ __('Add') }} " class="mdc-button mdc-button--raised ">
                </div>
            </form>

        </div>
    </div>

@endsection
