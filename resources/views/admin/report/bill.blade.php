@extends('layouts.main')
@section('title' , __('Bills Report'))
@section('content')

    <div class="container">

        <div class="container">
            @if(\Illuminate\Support\Facades\Session::has('inValidSearch'))
                <div
                        class="alert alert-danger text-center"> {{__( \Illuminate\Support\Facades\Session::get('inValidSearch'))}} </div>
            @endif
        </div>


        <h2 class="text-center mb-1">{{ __('Bills Report') }} </h2>

        <form method="POST" action="{{ route('generate_bill_report', app()->getLocale())}}">
            @csrf
            <div class="mdc-card bg-mdi-gray  mb-3">
                <h4 class="text-center mt-1">{{__('Search Here')}}</h4>
                <div class="row justify-content-center">
                    <div class=" mt-2 col-sm-3 ">
                        <div class="form-group text-center">
                            <label class="h5 text-center">{{__('From')}} </label>
                            <input type="date" name="month_from" class="form-control text-center"
                                   value="{{old('month_from')}}" required>
                        </div>
                    </div>

                    <div class=" mt-2 col-sm-3 text-center">
                        <div class="form-group ">
                            <label class="h5 text-center">{{__('To')}} </label>
                            <input type="date" name="month_to" class="form-control text-center"
                                   value="{{old('month_to')}}" required>
                        </div>
                    </div>
                </div>

                <div class="row text-center">

                    <div class="col-sm-4 ">
                        <a href="{{route('bill_report' , app()->getLocale() )}}"
                           class="mdc-button mdc-button--primary mb-3 mt-3 ">{{__('Show All')}}</a>

                    </div>
                    <div class="col-sm-4 ">
                        <input class="mdc-button mdc-button--primary   mb-3 mt-3" type="submit"
                               value="{{__('Search')}}">
                    </div>

                    @if(count($records) > 0)
                        <div class="col-sm-4 ">
                            <a href="{{route('bill_export' , app()->getLocale() )}}"
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
                            <th class="text-center"> {{ __('Bill Type') }} </th>
                            <th class="text-center"> {{ __('Company Name') }} </th>
                            <th class="text-center"> {{ __('Company Phone') }} </th>
                            <th class="text-center">  {{ __('Price') }} </th>
                            <th class="text-center"> {{ __('Notes') }} </th>

                        </tr>
                        </thead>
                        <tbody>
                        @php $count = 1; @endphp
                        @foreach ($records as $record)
                            <tr class="text-center">
                                <td class="text-center">{{ $count++ }}</td>
                                <td class="text-center">{{ $record->id }}</td>
                                <td class="text-center">{{ $record->created_at }}</td>
                                <td class="text-center">
                                    {{ app()->getLocale() === 'ar' ?  $record->billType->name_ar : $record->billType->name_en }}
                                </td>
                                <td class="text-center">{{ $record->company_name }}</td>
                                <td class="text-center">{{ $record->company_phone }}</td>
                                <td class="text-center">{{ $record->price }}</td>
                                <td class="text-center">{{ $record->notes }}</td>
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

