@extends('layouts.admin')
@section('title' , __('Bookings'))
@section('content')

    <div class="container mt-0">

        <h2 class="text-center mb-5">{{ __('Show') }} {{ __('Car Details') }} </h2>

        <a href="{{ route('_cars.index' , app()->getLocale()) }}"
           class="mdc-button mdc-button--success text-white btn-sm mb-2 ">
            {{ __('Back') }}
        </a>

        <div class="row justify-content-center">

            <div class=" text-center">

                @if($record->container !== null)

                    <h2 class="text-center mb-2"> {{ __('Container Details') }} </h2>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>{{__('Id')}}</th>
                            <th>{{__('Container Name')}}</th>
                            <th>{{__('Container Number')}}</th>
                            <th>{{__('Bill Number')}}</th>
                            <th>{{__('Arrival Date')}}</th>
                            <th>{{__('Notes')}}</th>
                            <th>{{__('Created At')}}</th>
                        </tr>

                        <tr>
                            <td class="text-center">  {{$record->container->id}} </td>
                            <td class="text-center">  {{$record->container->container_name}} </td>
                            <td class="text-center">  {{$record->container->container_number}} </td>
                            <td class="text-center">  {{$record->container->bill_number}} </td>
                            <td class="text-center">  {{$record->container->arrival_date}} </td>
                            <td class="text-center">  {{$record->container->notes}} </td>
                            <td class="text-center">  {{$record->container->created_at}} </td>
                        </tr>

                    </table>

                @endif

                <h2 class="text-center mb-2 mt-5"> {{  $record->container !== null ?  __('Car Details') : '' }} </h2>

                <table class="table table-bordered table-striped">
                    <tr>
                        <th>{{__('Name')}}</th>
                        <th>{{__('Model')}}</th>
                        <th>{{__('Color')}}</th>
                        <th>{{__('Quality Number')}}</th>
                        <th>{{__('Brand')}}</th>
                        <th>{{__('Vin')}}</th>
                        <th>{{__('Notes')}}</th>
                        <th>{{__('Created At')}}</th>
                    </tr>

                    <tr>
                        <td class="text-center">  {{$record->name}} </td>
                        <td class="text-center">  {{$record->model}} </td>
                        <td class="text-center">  {{$record->color}} </td>
                        <td class="text-center">  {{$record->quality_number}} </td>
                        <td class="text-center">  {{$record->brand}} </td>
                        <td class="text-center">  {{$record->vin}} </td>
                        <td class="text-center">  {{$record->notes}} </td>
                        <td class="text-center">  {{$record->created_at}} </td>
                    </tr>


                </table>

            </div>
        </div>
    </div>

@endsection

