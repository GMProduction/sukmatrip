<?php

namespace App\Http\Controllers\Main;

use App\Helper\CustomController;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Destinasi;
use App\Models\Duration;
use App\Models\Paket;
use App\Models\Penginapan;
use App\Models\Tour;
use Illuminate\Http\Request;

/**
 * Class MainController
 * @package App\Http\Controllers\Main
 */
class MainController extends CustomController
{
    //
    public function __construct()
    {
        parent::__construct();
    }

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
        return view('beranda')->with(['destinations' => $destinations, 'durations' => $durations, 'pakets' => $pakets, 'articles' => $articles]);
    }

    public function search()
    {
        $destinationId = $this->field('destination');
        $type = $this->field('type');
        $durationId = $this->field('duration');
        $products = Penginapan::where('id_destinasi', $destinationId)->where('tipe', $type)->where('duration_id', $durationId)->get();
        return view('pencarian')->with(['products' => $products]);
    }

    /**
     * @return mixed
     */
    public function ajaxSearch()
    {
        try {
            $destinationId = $this->field('destination');
            $type = $this->field('type');
            $durationId = $this->field('duration');
            $products = Penginapan::where('id_destinasi', $destinationId)->where('tipe', $type)->where('duration_id', $durationId)->offset(0)->limit(4)->get();
            return $this->jsonResponse($products);
        } catch (\Exception $e) {
            return $this->jsonResponse('Failed' . $e->getMessage(), 500);
        }

    }

    public function detail($id)
    {
        $product = Penginapan::with(['duration', 'destinasi'])->findOrFail($id);
        $destinasiId = $product->destinasi->id;
        $tour = Tour::with(['destinasi'])->where('id_destinasi', $destinasiId)->get();
        return view('detail')->with(['product' => $product, 'tours' => $tour]);
    }

    public function detailPaket($id)
    {
        $product = Paket::with(['penginapan.duration', 'penginapan.destinasi','penginapan.getImage.image', 'paketTour', 'getImage.image', 'paketTour.tour'])->findOrFail($id);
//        $product = Paket::with(['paketTour.tour'])->findOrFail($id);
//        return $this->jsonResponse($product);
        return view('detailPaket')->with(['product' => $product]);
    }
}
