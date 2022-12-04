<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserReferralResource;
use Illuminate\Support\Facades\Auth;

class ClientsController extends Controller
{

     /**
     * Provision a new web server.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $user_referral_tree = UserReferralResource::collection(Auth::user()->referrals);
        return view('pages.clients', ['user_referral_tree' => json_decode($user_referral_tree->toJson())]);
    }
     
}
