<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BChatController extends Controller
{
    //
    function index(){
       
        $data['content'] = 'Backend/Chats/chatspage';
        return view('Backend/Template/template', $data);


    }
}
