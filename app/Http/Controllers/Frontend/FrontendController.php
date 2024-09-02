<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{


    public function index()
    {
        return view('frontend.homepage.index');
    }




    public function search(Request $request)
    {
    $query = $request->input('query');
    // Add logic to handle the search query
    return view('frontend.homepage.results', compact('query'));
    }

}


