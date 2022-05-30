<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{

    public function index()
    {
        $favorites = Favorite::all();

        return view('favorites', compact('favorites'));
    }

    public function create(Request $request)
    {
        $favorite = new Favorite();
        $favorite->user_id = $request->user()->id;
        $favorite->title = $request->title;
        $favorite->save();

        // return redirect('result');
    }

    public function delete($id)
    {
        //
    }
}
