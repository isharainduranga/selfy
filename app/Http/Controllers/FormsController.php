<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
    // function register(){
    //     return view('Admin/Template/Adminregister', $data);

    // }
    function login(){
       
        $data['content'] = 'Backend/Dashboard/dashboard';
        return view('Admin/Template/Login', $data);

    }
    // function register(){
    //     return view('Adminregister');
    // }
}
