@extends('layouts.main')
@section('title' , __('Edit')  . ' ' . __('Buy Car')   )
@section('content')

    <div class="container">

        <h2 class="text-center mt-3">{{ __('Edit') }} {{ __('Buy Car') }} </h2>


        <div class="row col-1">
            <a href="{{ route('buy_cars.index' , app()->getLocale()) }}"
               class="mdc-button mdc-button--success text-white btn-sm mb-5">
                {{ __('Back') }}
            </a>
        </div>

        <form method="POST"
              action="{{ route('buy_cars.update' , [ 'language' => app()->getLocale() ,  'buy_car' => $record->id]) }}"
              enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row justify-content-center mb-3">

                <livewire:buy-car-edit :record="$record" />

            </div>
        </form>
    </div>

@endsection
