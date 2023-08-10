@extends('layouts.admin')
@section('title' , __('Bookings'))
@section('content')

    <div class="container mt-0">

        <h2 class="text-center mb-5">{{ __('Show') }} {{ __('Container Details') }} </h2>

        <a href="{{ route('containers.index' , app()->getLocale()) }}"
           class="mdc-button mdc-button--success text-white btn-sm mb-2 ">
            {{ __('Back') }}
        </a>

        <div class="row justify-content-center">

            <div class=" text-center">
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
                        <td class="text-center">  {{$record->id}} </td>
                        <td class="text-center">  {{$record->container_name}} </td>
                        <td class="text-center">  {{$record->container_number}} </td>
                        <td class="text-center">  {{$record->bill_number}} </td>
                        <td class="text-center">  {{$record->arrival_date}} </td>
                        <td class="text-center">  {{$record->notes}} </td>
                        <td class="text-center">  {{$record->created_at}} </td>
                    </tr>

                </table>


                <h2 class="text-center mb-2 mt-5"> {{ __('Cars') }} </h2>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>{{__('Id')}}</th>
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
                    @foreach($record->cars as $key => $car)
                        <tr>
                            <td class="text-center">  {{$car->id}} </td>
                            <td class="text-center">  {{$car->name}} </td>
                            <td class="text-center">  {{$car->model}} </td>
                            <td class="text-center">  {{$car->color}} </td>
                            <td class="text-center">  {{$car->quality_number}} </td>
                            <td class="text-center">  {{$car->brand}} </td>
                            <td class="text-center">  {{$car->vin}} </td>
                            <td class="text-center">  {{$car->code}} </td>
                            <td class="text-center">  {{$car->notes}} </td>
                            <td class="text-center">  {{$car->created_at}} </td>
                        </tr>

                    @endforeach
                </table>

            </div>
        </div>
    </div>

@endsection

