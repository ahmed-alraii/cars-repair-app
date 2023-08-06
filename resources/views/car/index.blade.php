@extends('layouts.admin')
@section('title' , __('Shop Cars'))
@section('content')

    <div class="container mt-0">

        <h2 class="text-center">{{ __('Shop Cars') }} </h2>
        @if(Auth::user()->role->name === 'Admin' )
            <a href="{{route('_cars.create' , app()->getLocale())}}"
               class="mdc-button mdc-button--raised mb-2 "> {{ __('Add') }}</a>
        @endif


        <div class="row">
            <form
                id="search-form" action="{{ route('_cars.index', ['language' => app()->getLocale()]) }}"
                method="get">

                <div class="form-group row justify-content-center mb-3">
                    <div class="col-md-6">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                            <div class="mdc-text-field">
                                <input class="mdc-text-field__input" id="search-text" name="search">
                                <div class="mdc-line-ripple"></div>
                                <label for="text-field-hero-input"
                                       class="mdc-floating-label">{{__('Search By Name Or Model')}}</label>
                            </div>
                        </div>
                    </div>
                </div>

            </form>

        </div>

        <div class="row">

            <br>
            <div class="table-responsive bg-light ">
                <table id="table" class="table">
                    <thead>
                    <tr>
                        <th> {{ __('#') }} </th>
                        <th> {{ __('Name') }} </th>
                        <th> {{ __('Model') }} </th>
                        <th> {{ __('Color') }} </th>
                        <th> {{ __('Quality Number') }} </th>
                        <th> {{ __('Vin') }} </th>
                        <th> {{ __('Notes') }} </th>
                        <th>{{ __('Action') }} </th>
                    </tr>
                    </thead>
                    <tbody>


                    @foreach ($records as $record)

                        <tr>
                            <td>{{ $num++ }}</td>
                            <td>{{ $record->name }}</td>
                            <td>{{ $record->model }}</td>
                            <td>{{ $record->color }}</td>
                            <td>{{ $record->quality_number }}</td>
                            <td>{{ $record->vin }}</td>
                            <td>{{ $record->notes }}</td>
                            <td>
                                <form
                                    action="{{ route('_cars.destroy', ['language' => app()->getLocale(), '_car' => $record->id]) }}"
                                    method="post">
                                    <input type="hidden" name="id" value="{{ $record->id }}">

                                    <a href="{{ route('_cars.show', ['language' => app()->getLocale(), '_car' => $record->id]) }}"
                                       class="btn btn-primary"> {{ __('Show') }} </a>
                                    @if(Auth::user()->role->name === 'Admin' )
                                        <a href="{{ route('_cars.edit', ['language' => app()->getLocale(), '_car' => $record->id]) }}"
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
        let form = $('#search-form');

        $('#search-text').on('blur', function () {
            form.submit();
        });
    });
</script>