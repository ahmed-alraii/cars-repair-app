@extends('layouts.admin')
@section('title' , __('Bills'))
@section('content')

    <div class="container mt-0">

        <h2 class="text-center">{{ __('Bills') }} </h2>
        @if(Auth::user()->role->name === 'Admin' )

            @if(request()->has('car_id'))
                <a href="{{route('bills.create' , [app()->getLocale() , 'car_id' => request()->query('car_id')])}}"
                   class="mdc-button mdc-button--raised mb-2 "> {{ __('Add') }}</a>

                <a href="{{ route('_cars.index' , [app()->getLocale() , 'car_id' => request()->query('car_id') ]) }}"
                   class="mdc-button mdc-button--success text-white btn-sm mb-2 ">
                    {{ __('Back') }}
                </a>

            @endif

        @endif




        <div class="row  justify-content-center">

            <div class="col-md-6">
                <div class="form-group  mb-3">

                    <form
                            id="search-form-text"
                            @if(request()->has('car_id'))
                            action="{{ route('bills.index', ['language' => app()->getLocale() , 'car_id' => request()->query('car_id') ]) }}"

                            @else
                                action="{{ route('bills.index', ['language' => app()->getLocale()]) }}"
                            @endif


                            method="get">

                        @if(request()->has('car_id'))
                            <input type="hidden" name="car_id" value="{{request()->query('car_id')}}">
                        @endif

                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                            <div class="mdc-text-field">
                                <input class="mdc-text-field__input" id="search-text" name="search">
                                <div class="mdc-line-ripple"></div>
                                <label for="text-field-hero-input"
                                       class="mdc-floating-label">{{__('Search By Company Name Or Company Phone')}}</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-3">
                <form
                        id="search-form-number"
                        action="{{ route('bills.index', ['language' => app()->getLocale() ] ) }}"
                        method="get">
                    @if(request()->has('car_id'))
                        <input type="hidden" name="car_id" value="{{request()->query('car_id')}}">
                    @endif
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field">
                            <input class="mdc-text-field__input" id="search-number" name="searchById">
                            <div class="mdc-line-ripple"></div>
                            <label for="text-field-hero-input"
                                   class="mdc-floating-label">{{__('Search By Number')}}</label>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <div class="row">

        <br>
        <div class="table-responsive bg-light ">
            <table id="table" class="table">
                <thead>
                <tr>
                    <th> {{ __('Id') }} </th>
                    <th> {{ __('Bill Type') }} </th>
                    <th> {{ __('Price') }} </th>
                    <th> {{ __('Company Name') }} </th>
                    <th> {{ __('Company Phone') }} </th>
                    <th> {{ __('Notes') }} </th>
                    <th>{{ __('Action') }} </th>
                </tr>
                </thead>
                <tbody>


                @foreach ($records as $record)

                    <tr>
                        <td>{{ $record->id  }}</td>
                        <td>{{ app()->getLocale() === 'ar' ? $record->billType->name_ar :  $record->billType->name_en}}</td>
                        <td>{{ $record->price }}</td>
                        <td>{{ $record->company_name }}</td>
                        <td>{{ $record->company_phone }}</td>
                        <td>{{ $record->notes }}</td>
                        <td>
                            <form
                                    action="{{ route('bills.destroy', ['language' => app()->getLocale(), 'bill' => $record->id]) }}"
                                    method="post">
                                <input type="hidden" name="id" value="{{ $record->id }}">

                                <a href="{{ route('bills.show', ['language' => app()->getLocale(), 'bill' => $record->id , 'car_id' => request()->query('car_id')]) }}"
                                   class="btn btn-primary"> {{ __('Show') }} </a>
                                @if(Auth::user()->role->name === 'Admin' )
                                    <a href="{{ route('bills.edit', ['language' => app()->getLocale(), 'bill' => $record->id , 'car_id' => request()->query('car_id')]) }}"
                                       class="btn btn-secondary"> {{ __('Edit') }} </a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            onclick=" event.preventDefault(); confirmDelete(
                                               '{{ __('Confirm Delete') }} ',
                                                '{{ __('Are You Sure?') }} ',
                                                '{{ __('Yes') }}' ,
                                                '{{ __('Cancel') }}' ,
                                                  this ); "
                                            class=" btn btn-danger">
                                        {{ __('Delete') }} </button>
                                @endif
                            </form>
                        </td>

                    </tr>

                @endforeach
                </tbody>
            </table>
            @if (count($records) === 0)
                <div class="text-center">
                    <h4> {{ __('No Data') }} </h4>
                </div>
            @endif
        </div>
    </div>

    <div class="row justify-content-center mt-2">

        {{ $records->links() }}
    </div>
    </div>
@endsection
<script src="{{ asset('admin/vendor/js/jquery.js') }}"></script>
<script>
    $(document).ready(function () {
        let formText = $('#search-form-text');
        let formNumber = $('#search-form-number');

        $('#search-text').on('blur', function () {
            formText.submit();
        });
        $('#search-number').on('blur', function () {
            formNumber.submit();
        });
    });
</script>
