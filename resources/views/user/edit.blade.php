@extends('layouts.admin')

@section('content')

    <div class="container">
        <a href="{{ route('users.index' , app()->getLocale()) }}" class="mdc-button mdc-button--success text-white btn-sm mb-4 ">
            {{ __('Back') }}
        </a>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h1 class="text-center m-3">{{__('Edit User')}}</h1>


                    <div class="card-body">
                        <form method="POST" action="{{ route('users.update' , ['language' =>  app()->getLocale() , 'user' => $record->id]) }}">
                            @csrf
                            @method('PUT')

                            <input type="hidden" value="{{$record->id}}" name="id">

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control @error('name') is-invalid @enderror" name="name"
                                           value="{{ $record->name }}"  autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ $record->email }}"  autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control @error('phone') is-invalid @enderror" name="phone"
                                           value="{{ $record->phone }}"  autocomplete="name" autofocus>

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           value="{{ $record->password }}"  autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           value="{{ $record->password }}" name="password_confirmation"
                                           autocomplete="new-password">

                                    @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                       class="col-md-4 col-form-label text-md-end">{{ __('User Role') }}</label>

                                <div class="col-md-6">

                                    <select class="form-control" name="role_id" id="role_id"
                                            onchange="onSelectRole(event)">
                                        @foreach($roles as $role)
                                            <option @if($record->role_id === $role->id)  selected
                                                    @endif value="{{$role->id}}">{{$role->name}}</option>
                                        @endforeach
                                    </select>
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
<script src="{{asset("admin/vendor/js/jquery.js")}}"></script>
<script>

    $(document).ready(function () {
        if ($('#role_id').val() !== '2') {
            $('#restaurants').hide();
        }
    });

    function onSelectRole(restaurant) {
        let restaurant_id = restaurant.target.value;
        if (restaurant_id === "2") {
            $('#restaurants').show();
        } else {
            $('#restaurants').hide();
        }
    }

</script>

