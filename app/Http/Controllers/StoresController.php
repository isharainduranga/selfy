<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoresController extends Controller
{
    //
    function index(){
       
        $data['content'] = 'Backend/Stores/storespage';
        return view('Backend/Template/template', $data);
    }
}
