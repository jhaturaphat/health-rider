<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrederRider;

class OrderRiderController extends Controller
{
    public function orderrider(){
        return view('orderrider');
    }
}
