<?php

namespace App\Http\Controllers\Main;

use App\Helper\CustomController;
use App\Http\Controllers\Controller;
use App\Models\Destinasi;
use App\Models\Duration;
use Illuminate\Http\Request;

class MainController extends CustomController
{
    //
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $destinations = Destinasi::all();
        $durations = Duration::all();
        return view('beranda')->with(['destinations' => $destinations, 'durations' => $durations]);
    }
}
