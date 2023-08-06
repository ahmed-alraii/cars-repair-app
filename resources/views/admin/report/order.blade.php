@extends('layouts.admin')
@section('title' , __('Orders Report'))
@section('content')

    <div class="container">

        <div class="container">
            @if(\Illuminate\Support\Facades\Session::has('inValidSearch'))
                <div
                    class="alert alert-danger text-center"> {{__( \Illuminate\Support\Facades\Session::get('inValidSearch'))}} </div>
            @endif
        </div>


        <h2 class="text-center mb-1">{{ __('Orders Report') }} </h2>

        <form method="POST" action="{{ route('generate_order_report', app()->getLocale())}}">
            @csrf
            <div class="mdc-card bg-mdi-gray  mb-3">
                <h4 class="text-center mt-1">{{__('Search Here')}}</h4>
                <div class="row justify-content-center">
                    <div class=" mt-2 col-sm-3 ">
                        <div class="form-group text-center">
                            <label class="h5 text-center">{{__('From')}} </label>
                            <input type="date" name="month_from" class="form-control text-center" value="{{old('month_from')}}" required>
                        </div>
                    </div>

                    <div class=" mt-2 col-sm-3 text-center">
                        <div class="form-group ">
                            <label class="h5 text-center">{{__('To')}} </label>
                            <input type="date" name="month_to" class="form-control text-center" value="{{old('month_to')}}" required>
                        </div>
                    </div>
                </div>

                <div class="row text-center">

                        <div class="col-sm-4 ">
                            <a href="{{route('order_report' , app()->getLocale() )}}"
                               class="mdc-button mdc-button--primary mb-3 mt-3 ">{{__('Show All')}}</a>

                        </div>
                        <div class="col-sm-4 ">
                        <input class="mdc-button mdc-button--primary   mb-3 mt-3" type="submit"
                               value="{{__('Search')}}">
                        </div>

                        @if(count($records) > 0)
                            <div class="col-sm-4 ">
                            <a href="{{route('order_export' , app()->getLocale() )}}"
                               class="mdc-button mdc-button--primary    mb-3 mt-3">{{__('Export Excel')}}</a>
                            </div>
                        @endif
                    </div>

            </div>
        </form>


        @if(count($records) > 0)
            <div class="row">
                <br>
                <div class="table-responsive bg-light ">


                    <table id="table" class="table">
                        <thead>
                        <tr class="text-center">
                            <th class="text-center"> {{ __('#') }} </th>
                            <th class="text-center"> {{ __('Bill NO.') }} </th>
                            <th class="text-center"> {{ __('Created Date') }} </th>
                            <th class="text-center"> {{ __('Customer Name') }} </th>
                            <th class="text-center"> {{ __('Customer Phone') }} </th>
                            <th class="text-center"> {{ __('Rent Date') }} </th>
                            <th class="text-center"> {{ __('Wedding Date') }} </th>
                            <th class="text-center"> {{ __('Type') }} </th>
                            <th class="text-center"> {{ __('Status') }} </th>
                            <th class="text-center"> {{ __('Advance Amount') }} </th>
                            <th class="text-center"> {{ __('Total Price') }} </th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $count = 1; @endphp
                        @foreach ($records as $record)
                            <tr class="text-center">
                                <td class="text-center">{{ $count++ }}</td>
                                <td class="text-center">{{ $record->id }}</td>
                                <td class="text-center">{{ $record->created_at }}</td>
                                <td class="text-center">{{ $record->wedding_date }}</td>

                                <td class="text-center">

                                   @foreach($record->menuItems as $menuItem)
                                        @php  $totalPrice += $menuItem->pivot->quantity * number_format( $menuItem->pivot->price  , 3); @endphp


                                        <p>  {{__('Name')}} : {{$menuItem->name}} -  {{__('Quantity')}} :  {{ $menuItem->pivot->quantity  }} - {{__('Price')}} :  {{  number_format( $menuItem->pivot->price  , 3) }} </p>
                                        <p> {{__('Total')}} :  {{  $menuItem->pivot->quantity * number_format( $menuItem->pivot->price  , 3) }} </p>
                                   @endforeach
                                </td>
                            </tr>
                        @endforeach
                        <tr class="text-center bg-purple  ">
                            <td colspan="11" class="text-center">
                                <label class="m-2 text-center text-white">
                                   ( <strong> {{__('Total Price')}} : {{number_format($totalPrice , 3)}}</strong> )
                                </label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        @endif

        @if(count($records) === 0)
            <h3 class="text-center mt-5">{{__('No Data')}}</h3>
        @endif

    </div>
@endsection

