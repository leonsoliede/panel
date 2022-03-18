<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use WisdomDiala\Cryptocap\Facades\Cryptocap;
class DashboardController extends Controller
{
    public function index()
    {  
        $date = Carbon::now();
        return view('dashboard')->with(['date' => $date]);
    }
    
    // public function createWelcomeResponse($value='')
    // {
    //     // return view('dashboard')->with(['price' => $price]);
    // }
}
