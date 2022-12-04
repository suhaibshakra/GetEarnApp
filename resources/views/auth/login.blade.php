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
                <h1>Register</h1>
                <div class="col-lg-12">
                    <div class="contact-bottom">
                        <div class="row">

                            <!-- ***** Contact Form Start ***** -->
                            <div class="col-lg-8 col-md-6 col-sm-12">
                                <div class="contact-form">
                                    <div class="row">
                                        <form method="post" action="{{ route('login.perform') }}">

                                            @csrf

                                            <h1 class="h3 mb-3 fw-normal">Login</h1>

                                            @include('layouts.partials.messages')

                                            <div class="form-group form-floating mb-3">
                                                <input type="text" class="form-control" name="username"
                                                    value="{{ old('username') }}" placeholder="Username"
                                                    required="required" autofocus>
                                                <label for="floatingName">Email or Username</label>
                                                @if ($errors->has('username'))
                                                <span
                                                    class="text-danger text-left">{{ $errors->first('username') }}</span>
                                                @endif
                                            </div>

                                            <div class="form-group form-floating mb-3">
                                                <input type="password" class="form-control" name="password"
                                                    value="{{ old('password') }}" placeholder="Password"
                                                    required="required">
                                                <label for="floatingPassword">Password</label>
                                                @if ($errors->has('password'))
                                                <span
                                                    class="text-danger text-left">{{ $errors->first('password') }}</span>
                                                @endif
                                            </div>

                                            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

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