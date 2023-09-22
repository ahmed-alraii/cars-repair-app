@extends('layouts.main')
@section('title' , __('Bookings'))
@section('content')

    <div class="container mt-0">

        <h2 class="text-center mb-5">{{ __('Show') }} {{ __('Car Details') }} </h2>

        <a href="{{ route('bills.index' , [app()->getLocale() , 'car_id' => request()->query('car_id') ]) }}"
           class="mdc-button mdc-button--success text-white btn-sm mb-2 ">
            {{ __('Back') }}
        </a>

        <div class="row justify-content-center">

            <div class=" text-center">


                <h2 class="text-center mb-2"> {{ __('Bill Details') }} </h2>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>{{__('Id')}}</th>
                        <th>{{__('Bill Type')}}</th>
                        <th>{{__('Price')}}</th>
                        <th>{{__('Company Name')}}</th>
                        <th>{{__('Company Phone')}}</th>
                        <th>{{__('Notes')}}</th>
                        <th>{{__('Created At')}}</th>
                    </tr>

                    <tr>
                        <td class="text-center">  {{$record->id}} </td>
                        <td class="text-center">  {{ app()->getLocale() === 'ar' ?  $record->billType->name_ar : $record->billType->name_en}} </td>
                        <td class="text-center">  {{$record->price}} </td>
                        <td class="text-center">  {{$record->company_name}} </td>
                        <td class="text-center">  {{$record->company_phone}} </td>
                        <td class="text-center">  {{$record->notes}} </td>
                        <td class="text-center">  {{$record->created_at}} </td>
                    </tr>

                </table>


                <h2 class="text-center mb-2 mt-5"> {{ __('Car Details')  }} </h2>

                <table class="table table-bordered table-striped">
                    <tr>
                        <th>{{__('Name')}}</th>
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
                        <td class="text-center">  {{$record->car->name}} </td>
                        <td class="text-center">  {{$record->car->model}} </td>
                        <td class="text-center">  {{$record->car->color}} </td>
                        <td class="text-center">  {{$record->car->quality_number}} </td>
                        <td class="text-center">  {{$record->car->brand}} </td>
                        <td class="text-center">  {{$record->car->vin}} </td>
                        <td class="text-center">  {{$record->car->code}} </td>
                        <td class="text-center">  {{$record->car->notes}} </td>
                        <td class="text-center">  {{$record->car->created_at}} </td>
                    </tr>


                </table>

            </div>
        </div>
    </div>

@endsection

