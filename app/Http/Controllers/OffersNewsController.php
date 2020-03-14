<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use App\News;
use App\Offer;

class OffersNewsController extends Controller
{
    public function index()
    {
        $news = News::where('published', true)->latest()->get();
        $offers = Offer::where('published', true)->latest()->get();

        return view('offers_news', compact('offers', 'news'));
    }
}
