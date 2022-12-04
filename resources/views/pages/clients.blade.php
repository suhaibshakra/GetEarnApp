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
                <h1>My Clients</h1>
                <div class="col-lg-12">
                    <div class="contact-bottom">
                        <div class="row">

                            <!-- ***** Contact Form Start ***** -->
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="contact-form">
                                    <div class="row">
                                        @include('components.tree-chart',['user_referral_tree'=>$user_referral_tree])
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