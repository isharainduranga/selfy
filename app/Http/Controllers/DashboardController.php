<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    function index(){
       
        $data['content'] = 'Backend/Dashboard/dashboard';
        return view('Backend/Template/template', $data);

    }
}
