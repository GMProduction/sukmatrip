<?php

namespace App\Http\Controllers;

use App\Helper\CustomController;
use App\Models\Destinasi;
use App\Models\Tour;
use Illuminate\Support\Arr;
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
    public function datatable()
    {
        return DataTables::of(Tour::with(['destinasi']))->make(true);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.tour.tour');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\JsonResponse|\Illuminate\View\View
     */
    public function pageAdd()
    {
        $data['destinasi'] = Destinasi::all();

        if ($this->request->isMethod('POST')) {
            try {
                $image = $this->generateImageName('image');

                $tour = [
                    'nama'         => $this->postField('namaTour'),
                    'harga'        => str_replace(',', '', $this->postField('hargaTour')),
                    'deskripsi'    => $this->postField('deskripsiTour'),
                    'id_destinasi' => $this->postField('destinasi'),
                    'image'        => '/uploads/images/'.$image,
                ];
                $this->uploadImageWatermark($image);
                $this->insert(Tour::class, $tour);
                return $this->jsonResponse('success', 200);

            }catch (\Exception $er){
                return $this->jsonResponse('error '.$er, 500);

            }

        }

        return view('admin.tour.tambahtour')->with($data);
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\JsonResponse|\Illuminate\View\View
     */
    public function pageEdit($id)
    {
        $data['tour']      = Tour::with(['destinasi'])->where('id', $id)->first();
        $data['destinasi'] = Destinasi::all();

        if($this->request->isMethod('POST')){
            try {
                $tour = [
                    'nama'         => $this->postField('namaTour'),
                    'harga'        => str_replace(',', '', $this->postField('hargaTour')),
                    'deskripsi'    => $this->postField('deskripsiTour'),
                    'id_destinasi' => $this->postField('destinasi'),
                ];

                if ($this->request->hasFile('image')) {
                    $image = $this->generateImageName('image');
                    $tour  = Arr::add($tour, 'image', '/uploads/images/'.$image);
                    $this->uploadImageWatermark($image);
                    unlink('../public'.$data['tour']->image);
                }
                $this->update(Tour::class, $tour);

//                return redirect()->back()->with(['success' => 'success']);
                return $this->jsonResponse('success', 200);
            }catch (\Exception $er) {
                return $this->jsonResponse('error '.$er->getMessage(), 500);

            }

        }

//        return $this->jsonResponse($data);
        return view('admin.tour.edittour')->with($data);

    }

    /**
     * @param $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete($id)
    {
        try {
            Tour::destroy($id);

            return $this->jsonResponse('success', 200);
        } catch (\Exception $er) {
            return $this->jsonResponse('error '.$er, 500);

        }
    }

}
