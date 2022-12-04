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
                <h1>Users</h1>
                <div class="col-lg-12">
                    <div class="contact-bottom">
                        <div class="row">

                            <!-- ***** Contact Form Start ***** -->
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="contact-form">
                                    <div class="row">
                                       
                                        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Birth date</th>
      <th scope="col">Phone number</th>
      <th scope="col">Referred by</th>
      <th scope="col">Referrer code</th>
      <th scope="col">Earned Points</th>
      <th scope="col">Referral Count</th>
      <th scope="col">Number of visit per referrer code</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <th scope="row">{{$user->name}}</th>
      <th scope="row">{{$user->email}}</th>
      <th scope="row">{{$user->birth_date}}</th>
      <th scope="row">{{$user->phone_number}}</th>
      <th scope="row">{{$user->referredBy?->name}}</th>
      <th scope="row">{{$user->referrer_code}}</th>
      <th scope="row">{{$user->earned_points}}</th>
      <th scope="row">{{$user->referralCount()}}</th>
      <th scope="row">{{$user->number_of_visit_per_referrer_code}}</th>
    </tr>
    @endforeach
  
  </tbody>
</table>

{{$users->links()}}
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