<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BCouponController extends Controller
{
     //
     function index(){
       
        $data['content'] = 'Backend/Coupon/couponpage';
        return view('Backend/Template/template', $data);
    }
}
