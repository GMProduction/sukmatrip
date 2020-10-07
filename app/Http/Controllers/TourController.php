<?php

namespace App\Http\Controllers;

use App\Helper\CustomController;
use App\Models\Destinasi;
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

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function pageAdd(){
        $data['destinasi'] = Destinasi::all();
        return view('admin.tour.tambahtour')->with($data);
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function pageEdit($id){
        $data['tour'] = Tour::with(['destinasi'])->where('id',$id)->first();
        $data['destinasi'] = Destinasi::all();
//        return $this->jsonResponse($data);
        return view('admin.tour.edittour')->with($data);

    }

}
