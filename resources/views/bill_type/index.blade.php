@extends('layouts.main')
@section('title' , __('Bill Types'))
@section('content')

    <div class="container mt-0">
        <div class="row">

            <h2 class="text-center">{{ __('Bill Types') }} </h2>
            @if(Auth::user()->role->name === 'Admin' )
                <div class="mb-3">
                    <a href="{{route('bill_types.create' , app()->getLocale())}}"
                       class="mdc-button mdc-button--raised mb-2 "> {{ __('Add') }}</a>
                </div>
            @endif

        </div>

        <div class="row">

            <br>
            <div class="table-responsive bg-light ">
                <table id="tableCustomer" class="table mt-3">
                    <thead>
                    <tr class="text-center">
                        <th class="text-center"> {{ __('Arabic Name') }} </th>
                        <th class="text-center"> {{ __('English Name') }} </th>
                        <th class="text-center">{{ __('Action') }} </th>
                    </tr>
                    </thead>
                    <tbody>


                    @foreach ($records as $record)
                        <form
                                action="{{ route('bill_types.destroy' , ['language' =>  app()->getLocale() , 'bill_type' => $record->id] ) }}"
                                method="post">
                            <input type="hidden" name="id" value="{{ $record->id }}">
                            <tr class="text-center">
                                <td class="text-center">{{ $record->name_ar }}</td>
                                <td class="text-center">{{ $record->name_en }}</td>
                                <td class="text-center">
                                    <form
                                            action="{{ route('bill_types.destroy', ['language' => app()->getLocale(), 'bill_type' => $record->id]) }}"
                                            method="post">
                                        <input type="hidden" name="id" value="{{ $record->id }}">

                                        @if(Auth::user()->role->name === 'Admin' )
                                            <a href="{{ route('bill_types.edit', ['language' => app()->getLocale(), 'bill_type' => $record->id ]) }}"
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
                        </form>
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

        @if(count($records) > 0)
            <div class="mt-3">
                {{$records->links()}}
            </div>
        @endif

    </div>
@endsection

