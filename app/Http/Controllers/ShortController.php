<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShortController extends Controller
{
    public function short()
    {
        $links = Auth::user()->link;
        return view('short', compact('links'));
    }
    public function shortPost(Request $request)
    {
        Link::create([
            'user_id' => Auth::user()->id,
            'url_asal' => $request->url_asal,
            'url_custom' => $request->url_custom
        ]);
        return redirect()->back();
    }
    public function direct(Link $link)
    {
        return $link;
        return redirect($link->url_asal);
    }
}
