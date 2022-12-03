@extends('layouts.auth-master')

@section('content')
    <form method="post" action="{{ route('register.perform') }}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <img class="mb-4" src="{!! url('images/bootstrap-logo.svg') !!}" alt="" width="72" height="57">
        
        <h1 class="h3 mb-3 fw-normal">Register</h1>

        <div class="form-group form-floating mb-3">
            <input type="file" required="required" class="form-control" name="avatar" value="{{ old('avatar') }}" placeholder="Avatar" autofocus>
            <label for="floatingBirthDate">Avatar</label>
            @if ($errors->has('avatar'))
                <span class="text-danger text-left">{{ $errors->first('avatar') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>
            <label for="floatingEmail">Email address</label>
            @if ($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name" required="required" autofocus>
            <label for="floatingName">Name</label>
            @if ($errors->has('name'))
                <span class="text-danger text-left">{{ $errors->first('name') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="number" minlength="6" class="form-control" name="phone_number" value="{{ old('phone_number') }}" placeholder="Phone Number" required="required" autofocus>
            <label for="floatingPhoneNumber">Phone Number</label>
            @if ($errors->has('phone_number'))
                <span class="text-danger text-left">{{ $errors->first('phone_number') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="date"  class="form-control" name="birth_date" value="{{ old('birth_date') }}" placeholder="Birth Date" autofocus>
            <label for="floatingBirthDate">Birth Date</label>
            @if ($errors->has('birth_date'))
                <span class="text-danger text-left">{{ $errors->first('birth_date') }}</span>
            @endif
        </div>
        
        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
            <label for="floatingPassword">Password</label>
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
            <label for="floatingConfirmPassword">Confirm Password</label>
            @if ($errors->has('password_confirmation'))
                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
        
        @include('layouts.partials.copy')
    </form>
@endsection