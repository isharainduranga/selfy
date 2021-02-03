<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BAdminController extends Controller
{
    function adminpage(){
       
        $data['content'] = 'Backend/Admin/pageadmin';
        return view('Backend/Template/template', $data);


    }
}
