@extends('layouts.admin')
@section('title' , __('Dashboard'))
@section('content')

    <div class="container p-5 bg-mdi-gray">
        <div class="row">

            <h2 class="text-center">{{ __('Dashboard') }} </h2>

            <div class="mdc-layout-grid">
                <div class="mdc-layout-grid__inner">
                    <div
                        class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                        <div class="mdc-card info-card info-card--success">
                            <div class="card-inner">
                                <h5 class="card-title text-center">{{ __('Containers') }}</h5>
                                <h5  class="font-weight-light pb-2 mb-1 border-bottom counts">{{$containers}}</h5>
{{--                                <h5 class=" text-muted text-center mt-4 m-1">{{__('Bookings')}}</h5>--}}
                                <div class="card-icon-wrapper">
                                    <i class="material-icons">trending_up</i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                        <div class="mdc-card info-card info-card--success">
                            <div class="card-inner">
                                <h5 class="card-title text-center">{{ __('Shop Cars') }}</h5>
                                <h5  class="font-weight-light pb-2 mb-1 border-bottom counts">{{$cars}}</h5>
{{--                                <h5 class=" text-muted text-center mt-4 m-1">{{__('Bookings')}}</h5>--}}
                                <div class="card-icon-wrapper">
                                    <i class="material-icons">trending_up</i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                        <div class="mdc-card info-card info-card--success">
                            <div class="card-inner">
                                <h5 class="card-title text-center">{{ __('Clients Cars') }}</h5>
                                <h5  class="font-weight-light pb-2 mb-1 border-bottom counts">{{$clientCars}}</h5>
{{--                                <h5 class=" text-muted text-center mt-4 m-1">{{__('Bookings')}}</h5>--}}
                                <div class="card-icon-wrapper">
                                    <i class="material-icons">trending_up</i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                        <div class="mdc-card info-card info-card--success">
                            <div class="card-inner">
                                <h5 class="card-title text-center">{{ __('Bills') }}</h5>
                                <h5  class="font-weight-light pb-2 mb-1 border-bottom counts">{{$bills}}</h5>
{{--                                <h5 class=" text-muted text-center mt-4 m-1">{{__('Bookings')}}</h5>--}}
                                <div class="card-icon-wrapper">
                                    <i class="material-icons">trending_up</i>
                                </div>
                            </div>
                        </div>
                    </div>


            </div>

        </div>
    </div>
@endsection

