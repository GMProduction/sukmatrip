<?php

namespace App\Http\Controllers\Main;

use App\Helper\CustomController;
use App\Http\Controllers\Controller;
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
class GalleryController extends CustomController
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
        $gallery = Gallery::all();
//        return $this->jsonResponse($pakets);
//        return $pakets->toArray();
        return view('gallery')->with(['gallery' => $gallery]);
    }

}
