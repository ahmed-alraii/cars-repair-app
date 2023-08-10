@extends('layouts.admin')
@section('title' , __('Add') . ' ' .__('Car'))
@section('content')

    <div class="container">

        <h2 class="text-center mt-3">{{ __('Add') }} {{ __('Car') }} </h2>

        <a href="{{ route('_cars.index' , app()->getLocale()) }}" class="mdc-button mdc-button--success text-white btn-sm mb-4 ">
            {{ __('Back') }}
        </a>

        <div class="row justify-content-center">
            <div class="row">

            </div>
            <form method="POST" action="{{route('_cars.store' , app()->getLocale())}}" >
                @csrf

                <div class=" row justify-content-center mb-3">

                    <div class="col-md-4 ">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                            <div class="mdc-text-field">
                                <input class="mdc-text-field__input" id="text-field-hero-input" name="name"
                                       value="{{old('name')}}">
                                <div class="mdc-line-ripple"></div>
                                <label for="text-field-hero-input"
                                       class="mdc-floating-label">{{__('Car Name')}}</label>
                            </div>
                        </div>

                        <div class="text-danger text-center">
                            @error('name')  {{$message}}   @enderror
                        </div>

                    </div>

                    <div class="col-md-4 ">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                            <div class="mdc-text-field">
                                <input  class="mdc-text-field__input" id="text-field-hero-input" name="color"
                                       value="{{old('color')}}">
                                <div class="mdc-line-ripple"></div>
                                <label for="text-field-hero-input"
                                       class="mdc-floating-label">{{__('Car Color')}}</label>
                            </div>
                        </div>
                        <div class="text-danger text-center">
                            @error('color')  {{$message}}   @enderror
                        </div>
                    </div>

                    <div class="col-md-4 ">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                            <div class="mdc-text-field">
                                <input class="mdc-text-field__input" id="text-field-hero-input" name="quality_number"
                                       value="{{old('quality_number')}}">
                                <div class="mdc-line-ripple"></div>
                                <label for="text-field-hero-input"
                                       class="mdc-floating-label">{{__('Car Quality Number')}}</label>
                            </div>
                        </div>
                        <div class="text-danger text-center">
                            @error('quality_number')  {{$message}}   @enderror
                        </div>
                    </div>

                </div>

                <div class=" row justify-content-center mb-3">
                    <div class="col-md-4 ">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                            <div class="mdc-text-field">
                                <input class="mdc-text-field__input" id="text-field-hero-input" name="vin"
                                       value="{{old('vin')}}">
                                <div class="mdc-line-ripple"></div>
                                <label for="text-field-hero-input"
                                       class="mdc-floating-label">{{__('Car Vin')}}</label>
                            </div>
                        </div>

                        <div class="text-danger text-center">
                            @error('vin')  {{$message}}   @enderror
                        </div>

                    </div>

                    <div class="col-md-4 ">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                            <div class="mdc-text-field">
                                <input class="mdc-text-field__input" id="text-field-hero-input" name="code"
                                       value="{{old('vin')}}">
                                <div class="mdc-line-ripple"></div>
                                <label for="text-field-hero-input"
                                       class="mdc-floating-label">{{__('Car Code')}}</label>
                            </div>
                        </div>

                        <div class="text-danger text-center">
                            @error('code')  {{$message}}   @enderror
                        </div>

                    </div>

                    <div class="col-md-4 ">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                            <div class="mdc-text-field">
                                <input  type="number" class="mdc-text-field__input" id="text-field-hero-input" name="model"
                                       value="{{old('model')}}">
                                <div class="mdc-line-ripple"></div>
                                <label for="text-field-hero-input"
                                       class="mdc-floating-label">{{__('Car Model')}}</label>
                            </div>
                        </div>
                        <div class="text-danger text-center">
                            @error('model')  {{$message}}   @enderror
                        </div>
                    </div>



                </div>

                <div class=" row justify-content-center mb-3">
                    <div class="col-md-4 ">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                            <div class="mdc-text-field">
                                <input class="mdc-text-field__input" id="text-field-hero-input" name="brand"
                                       value="{{old('brand')}}">
                                <div class="mdc-line-ripple"></div>
                                <label for="text-field-hero-input"
                                       class="mdc-floating-label">{{__('Car Brand')}}</label>
                            </div>
                        </div>

                        <div class="text-danger text-center">
                            @error('brand')  {{$message}}   @enderror
                        </div>

                    </div>

                    <div class="col-md-4 ">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                            <div class="mdc-text-field">
                                <select class="form-control custom-select text-center" name="container_id">
                                    <option value="">{{__('Select Container')}}</option>
                                  @foreach($containers as $container)
                                      <option value="{{$container->id}}">{{$container->id}} - {{$container->container_name}} - {{$container->container_number}}</option>
                                 @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="text-danger text-center">
                            @error('container_id')  {{$message}}   @enderror
                        </div>
                    </div>


                    <div class="col-md-4 ">
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
