<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // load page
    function index()
    {

        $data['content'] = 'Backend/Category/managecategory';
        return view('Backend/Template/template', $data);
    }
}
