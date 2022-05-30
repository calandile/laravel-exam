<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SearchController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function search(Request $request)
    {
        $key = "c9e02642";

        $title = $request->title;

        $response = Http::get("http://www.omdbapi.com/?s={$title}&plot=short&apikey={$key}")['Search'];

        return view('result')->with(compact('response'));
    }
}
