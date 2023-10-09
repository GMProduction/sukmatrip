<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Destinasi;
use App\Models\Duration;
use App\Models\Paket;
use Illuminate\Http\Request;

class PencarianController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $destinations = Destinasi::all();
        $durations = Duration::all();
        $pakets = Paket::with(['getImage.image'])->get();
        $articles = Article::with(['getImage.image'])->take(3)->get();
        //        return $this->jsonResponse($pakets);
        //        return $pakets->toArray();
        return view('pencarianpaket')->with(['destinations' => $destinations, 'durations' => $durations, 'pakets' => $pakets, 'articles' => $articles]);
    }
}
