@extends('layouts.main')
@section('title' , __('Client Cars'))
@section('content')

    <div class="container mt-0">

        <h2 class="text-center">{{ __('Buy Cars') }} </h2>
        @if(Auth::user()->role->name === 'Admin' )
            <a href="{{route('buy_cars.create' , app()->getLocale())}}"
               class="mdc-button mdc-button--raised mb-2 "> {{ __('Add') }}</a>
        @endif


        <div class="row  justify-content-center">

            <div class="col-md-6">
                <div class="form-group  mb-3">

                    <form
                            id="search-form-text"
                            action="{{ route('buy_cars.index', ['language' => app()->getLocale()]) }}"
                            method="get">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                            <div class="mdc-text-field">
                                <input class="mdc-text-field__input" id="search-text" name="search">
                                <div class="mdc-line-ripple"></div>
                                <label for="text-field-hero-input"
                                       class="mdc-floating-label">{{__('Search By Name Or Model Or Brand')}}</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-3">
                <form
                        id="search-form-number" action="{{ route('buy_cars.index', ['language' => app()->getLocale()]) }}"
                        method="get">

                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                        <div class="mdc-text-field">
                            <input class="mdc-text-field__input" id="search-number" name="searchByCode">
                            <div class="mdc-line-ripple"></div>
                            <label for="text-field-hero-input"
                                   class="mdc-floating-label">{{__('Search By Code')}}</label>
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
                    <th> {{ __('Lot Number') }} </th>
                    <th> {{ __('Total Price') }} </th>
                    <th> {{ __('Buy Date') }} </th>
                    <th> {{ __('Vin') }} </th>
                    <th> {{ __('Status') }} </th>
                    <th> {{ __('Buyer Type') }} </th>
                    <th>{{ __('Action') }} </th>
                </tr>
                </thead>
                <tbody>


                @foreach ($records as $record)

                    <tr>
                        <td>{{ $record->id  }}</td>
                        <td>{{ $record->lot_number }}</td>
                        <td>{{ $record->total_price }}</td>
                        <td>{{ $record->buy_date }}</td>
                        <td>{{ $record->vin }}</td>
                        <td>{{ $record->status }}</td>
                        <td>{{ __($record->buyer_type) }}</td>

                        <td>
                            <form
                                    action="{{ route('buy_cars.destroy', ['language' => app()->getLocale(), 'buy_car' => $record->id]) }}"
                                    method="post">
                                <input type="hidden" name="id" value="{{ $record->id }}">

                                <a href="{{ route('buy_cars.show', ['language' => app()->getLocale(), 'buy_car' => $record->id]) }}"
                                   class="btn btn-primary"> {{ __('Show') }} </a>


                                @if(Auth::user()->role->name === 'Admin' )


                                    <a href="{{ route('buy_cars.edit', ['language' => app()->getLocale(), 'buy_car' => $record->id]) }}"
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
