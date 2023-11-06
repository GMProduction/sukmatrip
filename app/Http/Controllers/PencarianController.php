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
        $sort = \request('s');
        $dur = \request('q');
        $duration = Duration::where('name', $dur)->first();

        $pakets = Paket::with(['getImage.image']);
        if ($duration) {
            $pakets = $pakets->where('duration_id', $duration->id);
        }
        if ($sort && $sort != 'all') {
            $pakets = $pakets->orderBy('harga', $sort);
        }
        $pakets = $pakets->paginate(12)->withQueryString();
        $articles = Article::with(['getImage.image'])->take(3)->get();
        //        return $this->jsonResponse($pakets);
        //        return $pakets->toArray();
        $destinations = Destinasi::all();
        $durationsAll = Duration::all();
        return view('pencarianpaket')->with(['destinations' => $destinations, 'durations' => $durationsAll, 'pakets' => $pakets, 'articles' => $articles]);
    }
}
