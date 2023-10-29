@extends('layouts.main')
@section('title' , __('Bookings'))
@section('content')

    <div class="container mt-0">

        <h2 class="text-center mb-5">{{ __('Show') }} {{ __('Client Car Details') }} </h2>

        <a href="{{ route('cars_clients.index' , app()->getLocale()) }}"
           class="mdc-button mdc-button--success text-white btn-sm mb-2 ">
            {{ __('Back') }}
        </a>

        <div class="row justify-content-center">

            <div class=" text-center">


                <h2 class="text-center mb-2 mt-5"> {{ __('Client Car Details') }}  </h2>

                <table class="table table-bordered table-striped table-responsive">
                    <tr>
                        <th>{{__('Client Name')}}</th>
                        <th>{{__('Client Phone')}}</th>
                        <th>{{__('Car Name')}}</th>
                        <th>{{__('Show Date')}}</th>
                        <th>{{__('Sell Price')}}</th>
                        <th>{{__('Sell Date')}}</th>
                        <th>{{__('Model')}}</th>
                        <th>{{__('Color')}}</th>
                        <th>{{__('Quality Number')}}</th>
                        <th>{{__('Brand')}}</th>
                        <th>{{__('Vin')}}</th>
                        <th>{{__('Code')}}</th>
                        <th>{{__('Notes')}}</th>
                        <th>{{__('Created At')}}</th>
                    </tr>

                    <tr>
                        <td class="text-center">  {{$record->client_name}} </td>
                        <td class="text-center">  {{$record->client_phone}} </td>
                        <td class="text-center">  {{$record->car_name}} </td>
                        <td class="text-center">  {{$record->show_date}} </td>
                        <td class="text-center">  {{$record->sell_price}} </td>
                        <td class="text-center">  {{$record->sell_date}} </td>
                        <td class="text-center">  {{$record->car_model}} </td>
                        <td class="text-center">  {{$record->car_color}} </td>
                        <td class="text-center">  {{$record->car_quality_number}} </td>
                        <td class="text-center">  {{$record->car_brand}} </td>
                        <td class="text-center">  {{$record->car_vin}} </td>
                        <td class="text-center">  {{$record->car_code}} </td>
                        <td class="text-center">  {{$record->notes}} </td>
                        <td class="text-center">  {{$record->created_at}} </td>
                    </tr>


                </table>

            </div>
        </div>
    </div>

@endsection

