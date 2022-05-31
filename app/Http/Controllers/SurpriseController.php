<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SurpriseController extends Controller
{
    public function surprise(Request $request)
    {
        $key = config('services.omdb.key');

        $collection = collect(["naruto", "massimo", "woof", "spiderman", "shrek", "pirates"]);
        $surprise = $collection->random();

        $response = Http::get("http://www.omdbapi.com/?s={$surprise}&apikey={$key}")['Search'];

        return view('surprise')->with(compact('response'));
    }
}
