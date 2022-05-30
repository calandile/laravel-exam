<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SurpriseController extends Controller
{
    public function surprise(Request $request)
    {
        $collection = collect(["naruto", "massimo", "woof", "spiderman", "shrek"]);
        $surprise = $collection->random();

        $key = "c9e02642";

        $response = Http::get("http://www.omdbapi.com/?s={$surprise}&apikey={$key}")['Search'];

        return view('surprise')->with(compact('response'));
    }
}
