<?php

namespace App\Http\Controllers;



class DashboardController extends Controller
{

     /**
     * Provision a new web server.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {

        return view('pages.dashboard');
    }
     
}
