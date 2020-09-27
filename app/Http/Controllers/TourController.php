<?php

namespace App\Http\Controllers;

use App\Helper\CustomController;
use App\Models\Tour;
use Yajra\DataTables\DataTables;

class TourController extends CustomController
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return mixed
     * @throws \Exception
     */
    public function datatable(){
        return DataTables::of(Tour::with(['getImage.image']))->make(true);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        return view('admin.tour.tour');
    }

}
