@extends('layouts.admin')
@section('title' , __('Edit Container')  )
@section('content')

    <div class="container">

        <h2 class="text-center mt-3">{{ __('Edit') }} {{ __('Container') }} </h2>


        <div class="row col-1">
            <a href="{{ route('containers.index' , app()->getLocale()) }}" class="mdc-button mdc-button--success text-white btn-sm mb-5">
                {{ __('Back') }}
            </a>
        </div>

        <form method="POST"
              action="{{ route('containers.update' , [ 'language' => app()->getLocale() ,  'container' => $record->id]) }}"
              enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row justify-content-center mb-3">


                <input type="hidden" name="id" value="{{$record->id}}">

                <div class="col-md-4 ">
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field">
                            <input class="mdc-text-field__input" id="text-field-hero-input" name="container_name"
                                   value="{{$record->container_name}}">
                            <div class="mdc-line-ripple"></div>
                            <label for="text-field-hero-input"
                                   class="mdc-floating-label">{{__('Container Name')}}</label>
                        </div>
                    </div>

                    <div class="text-danger text-center">
                        @error('container_name')  {{$message}}   @enderror
                    </div>

                </div>

                <div class="col-md-4 ">
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field">
                            <input class="mdc-text-field__input" id="text-field-hero-input" name="container_number"
                                   value="{{$record->container_number}}">
                            <div class="mdc-line-ripple"></div>
                            <label for="text-field-hero-input"
                                   class="mdc-floating-label">{{__('Container Number')}}</label>
                        </div>
                        <div class="text-danger text-center">
                            @error('container_number')  {{$message}}   @enderror
                        </div>
                    </div>

                </div>

                <div class="col-md-4 ">
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field">
                            <input class="mdc-text-field__input" id="text-field-hero-input" name="bill_number"
                                   value="{{$record->bill_number}}">
                            <div class="mdc-line-ripple"></div>
                            <label for="text-field-hero-input"
                                   class="mdc-floating-label">{{__('Bill Number')}}</label>
                        </div>
                    </div>
                    <div class="text-danger text-center">
                        @error('bill_number')  {{$message}}   @enderror
                    </div>
                </div>

            </div>


            <div class=" row justify-content-center mb-3">
                <div class="col-md-4 ">
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field">
                            <input type="date" class="mdc-text-field__input" id="text-field-hero-input"
                                   name="arrival_date"
                                   value="{{$record->arrival_date}}">
                            <div class="mdc-line-ripple"></div>
                            <label for="text-field-hero-input"
                                   class="mdc-floating-label">{{__('Arrival Date')}}</label>
                        </div>
                        <div class="text-danger text-center">
                            @error('arrival_date')  {{$message}}   @enderror
                        </div>
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
