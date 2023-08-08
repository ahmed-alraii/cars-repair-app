@extends('layouts.admin')
@section('title' , __('Add') . ' ' . __('Bill Type'))
@section('content')

    <div class="container">
        <a href="{{ route('bill_types.index' , app()->getLocale()) }}" class="mdc-button mdc-button--success text-white btn-sm mb-4 ">
            {{ __('Back') }}
        </a>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h1 class="text-center m-3">{{__('Add')}} {{__('Bill Type')}}</h1>

                    <div class="card-body">
                        <form method="POST" action="{{ route('bill_types.store' , app()->getLocale())}}">
                            @csrf


                            <div class="row mb-3">
                                <label for="name_ar"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Arabic Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control @error('name_ar') is-invalid @enderror" name="name_ar"
                                           value="{{ old('name_ar') }}"  autocomplete="name_ar" autofocus>

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
                                           value="{{ old('name_en') }}"  autocomplete="name_en" autofocus>

                                    @error('name_en')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class=" text-center mb-3 ">
                                <input type="submit" value="{{ __('Add') }} " class="btn btn-primary ">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
<script src="{{asset("admin/vendor/js/jquery.js")}}"></script>
<script>
</script>

