<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CityCookieController extends Controller
{
    public function getCityCookie($city)
    {
        return cookie('city', $city, 60*60*24*31);
    }

    public function placeCityCookie(Request $request)
    {
        $cookie = cookie('city', $request->city, 60*60*24*31);
        return back()->cookie($cookie);
    }

}
