<?php

namespace App\Http\Controllers\Main;

use App\Helper\CustomController;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Destinasi;
use App\Models\Duration;
use App\Models\Gallery;
use App\Models\Paket;
use App\Models\Penginapan;
use App\Models\Tour;
use Illuminate\Http\Request;

/**
 * Class MainController
 * @package App\Http\Controllers\Main
 */
class ArticleController extends CustomController
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
        $article = Article::with("getImage.image")->get();
//        return $this->jsonResponse($pakets);
//        return $pakets->toArray();
        return view('article')->with(['articles' => $article]);
//        dd($article);
    }


    public function detailArticle($id)
    {
        $article = Article::with(['getImage.image'])->findOrFail($id);
//        $product = Paket::with(['paketTour.tour'])->findOrFail($id);
//        return $this->jsonResponse($product);
        return view('detailArticle')->with(['article' => $article]);
    }
}
