<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BStoryController extends Controller
{
    //
    function index(){
       
        $data['content'] = 'Backend/Stories/storymanage';
        return view('Backend/Template/template', $data);
    }
}
