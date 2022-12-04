@extends('layouts.master')

<style>
    .header-area .main-nav .nav li a {
        color: #000000 !important;
    }
</style>
@section('content')
<section class="page">
    <!-- ***** Page Content Start ***** -->
    <div class="page-bottom">
        <div class="container">
            <div class="row">
                <h1>Login</h1>
                <div class="col-lg-12">
                    <div class="contact-bottom">
                        <div class="row">
                            
                            <!-- ***** Contact Form Start ***** -->
                            <div class="col-lg-8 col-md-6 col-sm-12">
                                <div class="contact-form">
                                    <div class="row">
                                        <form method="post" action="{{ route('register.perform') }}" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="ref" value="{{request()->ref}}" />
                                            <div class="col-lg-6 col-md-12 col-sm-12">
                                                <label for="floatingBirthDate">Avatar</label>
                                                <input type="file" required="required" class="form-control" name="avatar" value="{{ old('avatar') }}" placeholder="Avatar" >
                                                @if ($errors->has('avatar'))
                                                    <span class="text-danger text-left">{{ $errors->first('avatar') }}</span>
                                                @endif
                                            </div>
                                           
                                            <div class="col-lg-12">
                                                <label for="floatingEmail">Email address</label>
                                                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>
                                                @if ($errors->has('email'))
                                                    <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                                                @endif
                                            </div>
                                            <div class="col-lg-12">
                                                <label for="floatingName">Name</label>
                                                <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name" required="required" autofocus>
                                                @if ($errors->has('name'))
                                                    <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                                                @endif
                                            </div>
                                            <div class="col-lg-12">
                                                <label for="floatingName">Birth Date</label>
                                                <input type="date" class="form-control" name="birth_date" value="{{ old('birth_date') }}" placeholder="birth_date" >
                                                @if ($errors->has('birth_date'))
                                                    <span class="text-danger text-left">{{ $errors->first('birth_date') }}</span>
                                                @endif
                                            </div>
                                            <div class="col-lg-12">
                                                <label for="floatingPhoneNumber">Phone Number</label>
                                                <input type="number" minlength="6" class="form-control" name="phone_number" value="{{ old('phone_number') }}" placeholder="Phone Number" required="required" autofocus>
                                                @if ($errors->has('phone_number'))
                                                    <span class="text-danger text-left">{{ $errors->first('phone_number') }}</span>
                                                @endif
                                            </div>
                                            <div class="col-lg-12">
                                                <label for="floatingPassword">Password</label>
                                                <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                                                @if ($errors->has('password'))
                                                    <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                                                @endif
                                            </div>
                                            <div class="col-lg-12">
                                                <label for="floatingConfirmPassword">Confirm Password</label>
                                                <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
                                                @if ($errors->has('password_confirmation'))
                                                    <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                                                @endif
                                            </div>
                                              <button class="w-100 btn-primary-line" type="submit">Login</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- ***** Contact Form End ***** -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Page Content End ***** -->
</section>

@endsection