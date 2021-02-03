<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BOrdersController extends Controller
{
    // lode view
    function index(){
       
        $data['content'] = 'Backend/Orders/orders';
        return view('Backend/Template/template', $data);


    }
}
