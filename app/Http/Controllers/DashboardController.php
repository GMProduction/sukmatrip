<?php

namespace App\Http\Controllers;

use App\Helper\CustomController;
use App\Models\Paket;
use App\Models\Penginapan;
use App\Models\Tour;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class DashboardController
 * @package App\Http\Controllers
 */
class DashboardController extends CustomController
{
    public function __construct()
    {
        parent::__construct();

    }

    public function index(){
        return view('admin.dashboard');
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getPenginapan(Request $request){
        try {
            $code     = 200;
            $response = count(Penginapan::all()->where('tipe','=',$request->get('tipe')));
        }catch (\Exception $e){
            $code     = 500;
            $response = [
                'msg' => 'Terjadi kesalahan dalam pengambilan data : '.$e->getMessage(),
            ];
        }
        return $this->jsonResponse($response, $code);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getTour(){
        try {
            $code     = 200;
            $response = count(Tour::all());
        }catch (\Exception $e){
            $code     = 500;
            $response = [
                'msg' => 'Terjadi kesalahan dalam pengambilan data : '.$e->getMessage(),
            ];
        }
        return $this->jsonResponse($response, $code);
    }


    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getPaket(){
        try {
            $code     = 200;
            $response = count(Paket::all());
        }catch (\Exception $e){
            $code     = 500;
            $response = [
                'msg' => 'Terjadi kesalahan dalam pengambilan data : '.$e->getMessage(),
            ];
        }
        return $this->jsonResponse($response, $code);
    }
}
