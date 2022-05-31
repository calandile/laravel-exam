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
        $key = config('services.omdb.key');

        $title = $request->title;

        $response = Http::get("http://www.omdbapi.com/?s={$title}&plot=short&apikey={$key}")['Search'];

        return view('result')->with(compact('response'));
    }

    public function show(Request $request)
    {
        return view('result')->with(compact('response'));
    }
}
