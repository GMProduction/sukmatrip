<?php

namespace App\Http\Controllers;

use App\Helper\CustomController;
use App\Models\Gallery;
use App\Models\Paket;
use App\Models\Pakets_tour;
use App\Models\Penginapan;
use App\Models\Tour;
use PaketsTours;
use Yajra\DataTables\DataTables;

class PaketController extends CustomController
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
        return DataTables::of(Paket::with(['penginapan']))->make(true);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.paket.paket');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function pageAdd()
    {
        if ($this->request->isMethod('POST')) {
            $data = [
                'nama'          => $this->postField('namaPaket'),
                'harga'         => str_replace(',', '', $this->postField('hargaPaket')),
                'deskripsi'     => $this->postField('deskripsiPaket'),
                'id_penginapan' => $this->postField('penginapan'),
            ];

            $penginapan = $this->insert(Paket::class, $data);

            $tour = $this->postField('tour');

            foreach ($tour as $t){
                $dttour = [
                    'paket_id' => $penginapan->id,
                    'tour_id' => $t
                ];
                $this->insert(Pakets_tour::class,$dttour);
            }
            return redirect()->back()->with(['success' => 'success']);
        }

        $data['penginapan'] = Penginapan::all();

        return view('admin.paket.tambahpaket')->with($data);

    }

    /**
     * @param $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function setTour($id)
    {
        try {
            $penginapan = Penginapan::with(['destinasi'])->where('id', $id)->first();
            $tour       = Tour::with(['destinasi'])->whereHas(
                'destinasi',
                function ($query) use ($penginapan) {
                    return $query->where('id', $penginapan->destinasi->id);
                }
            )->get();

            return $this->jsonResponse($tour);
        } catch (\Exception $er) {
            return $this->jsonResponse('error '.$er->getMessage(), 500);
        }
    }
}
