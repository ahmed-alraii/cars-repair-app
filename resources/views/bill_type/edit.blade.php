@extends('layouts.main')
@section('title' , __('Edit') . ' ' . __('Bill Type'))
@section('content')

    <div class="container">
        <a href="{{ route('bill_types.index' , app()->getLocale()) }}"
           class="mdc-button mdc-button--success text-white btn-sm mb-4 ">
            {{ __('Back') }}
        </a>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h1 class="text-center m-3">{{__('Edit')}} {{__('Bill Type')}}</h1>


                    <div class="card-body">
                        <form method="POST"
                              action="{{ route('bill_types.update' , ['language' =>  app()->getLocale() , 'bill_type' => $record->id]) }}">
                            @csrf
                            @method('PUT')

                            <input type="hidden" value="{{$record->id}}" name="id">

                            <div class="row mb-3">
                                <label for="name_ar"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Arabic Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control @error('name_ar') is-invalid @enderror" name="name_ar"
                                           value="{{ $record->name_ar }}" required autocomplete="name_ar" autofocus>

                                    @error('name_ar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="name"
                                       class="col-md-4 col-form-label text-md-end">{{ __('English Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name_en" type="text"
                                           class="form-control @error('name_en') is-invalid @enderror" name="name_en"
                                           value="{{ $record->name_en }}" required autocomplete="name_en" autofocus>

                                    @error('name_en')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row justify-content-center">
                                <div class="form-group text-center col-5 mb-3 ">
                                    <input type="submit" value="{{ __('Update') }} " class="btn btn-primary col-3 ">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


