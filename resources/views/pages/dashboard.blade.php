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
                <h1>Dashboard</h1>
                <div class="col-lg-12">
                    <div class="contact-bottom">
                        <div class="row">

                            <!-- ***** Contact Form Start ***** -->
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="contact-form">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s" data-scroll-reveal-id="8" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                                           
                                            <div class="pricing-item ">
                                                <div class="pricing-header">
                                                    <h3 class="pricing-title" style="top: 25%;">REFERRER CODE : <strong>{{Auth::user()->referrer_code}}</strong></h3>
                                                    <h6 class="pricing-title" style="top: 45%;"> {{Auth::user()->getReferralLink()}}      </h6>
                                                    <div class="pricing-footer" >
                                                        <a style="margin: 80px;" onclick="copyURL()">Copy link</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="toast" style="width: 100%;text-align: center;">
                                                Copied!!
                                               </div>
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s" data-scroll-reveal-id="8" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                                            <div class="pricing-item active">
                                                <div class="pricing-header">
                                                    <h3 class="pricing-title">EARNED POINTS</h3>
                                                    <div class="number-hexagon">
                                                        <span>  {{Auth::user()->earned_points}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s" data-scroll-reveal-id="8" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                                            <div class="pricing-item active">
                                                <div class="pricing-header">
                                                    <h3 class="pricing-title">NUMBER OF VISIT PER REFERRER CODE</h3>
                                                    <div class="number-hexagon">
                                                        <span>  {{Auth::user()->number_of_visit_per_referrer_code}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


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


<script>
    let text = "{{Auth::user()->getReferralLink()}}";
    const copyURL = async () => {
      try {
        await navigator.clipboard.writeText(text);
        $('.toast').toast('show')

        console.log('Content copied to clipboard');
      } catch (err) {
        console.error('Failed to copy: ', err);
      }
    }
  </script>
@endsection