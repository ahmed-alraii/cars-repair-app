@extends('layouts.admin')
@section('title' , __('Containers'))
@section('content')

    <div class="container mt-0">

        <h2 class="text-center">{{ __('Containers') }} </h2>
        @if(Auth::user()->role->name === 'Admin' )
            <a href="{{route('containers.create' , app()->getLocale())}}"
               class="mdc-button mdc-button--raised mb-2 "> {{ __('Add') }}</a>
        @endif

        <div class="row">
            <form
                id="search-form" action="{{ route('containers.index', ['language' => app()->getLocale()]) }}"
                method="get">

                <div class="form-group row justify-content-center mb-3">
                    <div class="col-md-6">
                        <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                            <div class="mdc-text-field">
                                <input class="mdc-text-field__input" id="search-text" name="search">
                                <div class="mdc-line-ripple"></div>
                                <label for="text-field-hero-input"
                                       class="mdc-floating-label">{{__('Search By Name Or Number')}}</label>
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
                        <th> {{ __('Container Name') }} </th>
                        <th> {{ __('Container Number') }} </th>
                        <th> {{ __('Bill Number') }} </th>
                        <th> {{ __('Arrival Date') }} </th>
                        <th> {{ __('Notes') }} </th>
                        <th>{{ __('Action') }} </th>
                    </tr>
                    </thead>
                    <tbody>


                    @foreach ($records as $record)

                        <tr>
                            <td>{{ $num++ }}</td>
                            <td>{{ $record->container_name }}</td>
                            <td>{{ $record->container_number }}</td>
                            <td>{{ $record->bill_number }}</td>
                            <td>{{ $record->arrival_date }}</td>
                            <td>{{ $record->notes }}</td>
                            <td>
                                <form
                                    action="{{ route('containers.destroy', ['language' => app()->getLocale(), 'container' => $record->id]) }}"
                                    method="post">
                                    <input type="hidden" name="id" value="{{ $record->id }}">

                                    <a href="{{ route('containers.show', ['language' => app()->getLocale(), 'container' => $record->id]) }}"
                                       class="btn btn-primary"> {{ __('Show') }} </a>
                                    @if(Auth::user()->role->name === 'Admin' )
                                        <a href="{{ route('containers.edit', ['language' => app()->getLocale(), 'container' => $record->id]) }}"
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
