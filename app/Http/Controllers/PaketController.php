<?php

namespace App\Http\Controllers;

use App\Helper\CustomController;
use App\Models\Article_to_image;
use App\Models\Gallery;
use App\Models\Image;
use App\Models\Paket;
use App\Models\Paket_to_image;
use App\Models\Pakets_tour;
use App\Models\Penginapan;
use App\Models\Tour;
use Illuminate\Support\Facades\DB;
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
        return DataTables::of(Paket::with(['penginapan.destinasi', 'penginapan.duration', 'getImage.image']))->make(true);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.paket.paket');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\JsonResponse|\Illuminate\View\View
     */
    public function pageAdd()
    {
        if ($this->request->isMethod('POST')) {

            try {
                $data = [
                    'nama'          => $this->postField('namaPaket'),
                    'harga'         => str_replace(',', '', $this->postField('hargaPaket')),
                    'deskripsi'     => $this->postField('deskripsiPaket'),
                    'id_penginapan' => $this->postField('penginapan'),
                ];

                $penginapan = $this->insert(Paket::class, $data);

                $image = $this->generateImageName('image');

                $dataImage = [
                    'tipe' => 'paket',
                    'url'  => '/uploads/images/'.$image,
                ];
                $this->uploadImageWatermark($image);
                $idImg      = $this->insert(Image::class, $dataImage);
                $artikleImg = [
                    'id_paket' => $penginapan->id,
                    'id_image' => $idImg->id,
                ];
                $this->uploadImageWatermark($image);

                $this->insert(Paket_to_image::class, $artikleImg);
                $tour = $this->postField('tour');

                foreach ($tour as $t) {
                    $dttour = [
                        'paket_id' => $penginapan->id,
                        'tour_id'  => $t,
                    ];
                    $this->insert(Pakets_tour::class, $dttour);
                }

                return $this->jsonResponse('success', 200);

            } catch (\Exception $er) {
                return $this->jsonResponse('error '.$er->getMessage(), 500);

            }

        }

        $data['penginapan'] = Penginapan::all();

        return view('admin.paket.tambahpaket')->with($data);

    }

    /**
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\JsonResponse|\Illuminate\View\View
     */
    public function pageEdit($id)
    {


        $data['penginapan'] = Penginapan::all();
        $data['paket']      = Paket::with(['penginapan.destinasi', 'penginapan.duration', 'getImage.image', 'paketTour'])->where('id', $id)->first();
    $img = $data['paket']->getImage[0]->image->url;
        if ($this->request->isMethod('POST')) {

            try {
                $data = [
                    'nama'          => $this->postField('namaPaket'),
                    'harga'         => str_replace(',', '', $this->postField('hargaPaket')),
                    'deskripsi'     => $this->postField('deskripsiPaket'),
                    'id_penginapan' => $this->postField('penginapan'),
                ];

                $this->update(Paket::class, $data);

                $image = $this->generateImageName('image');

                if ($image) {
                    $dataImage = [
                        'id'  => $this->postField('idImg'),
                        'url' => '/uploads/images/'.$image,
                    ];

                    $this->uploadImageWatermark($image);
                    unlink('../public'.$img);

                    $this->updateOther(Image::class, $dataImage);

                }

                DB::delete('delete from pakets_tours where paket_id = ?', [$id]);

                $tour = $this->postField('tour');

                foreach ($tour as $t) {
                    $dttour = [
                        'paket_id' => $id,
                        'tour_id'  => $t,
                    ];
                    $this->insert(Pakets_tour::class, $dttour);
                }

                return $this->jsonResponse('success', 200);

            } catch (\Exception $er) {
                return $this->jsonResponse('error '.$er->getMessage(), 500);

            }

        }

//       return $this->jsonResponse($data);

        return view('admin.paket.editpaket')->with($data);

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

    /**
     * @param $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete($id)
    {
        try {
            DB::delete('delete from pakets_tours where paket_id = ?', [$id]);

            DB::delete('delete from paket_to_images where id_paket = ?', [$id]);

            Paket::destroy($id);

            return $this->jsonResponse('success', 200);
        } catch (\Exception $er) {
            return $this->jsonResponse('error '.$er->getMessage(), 500);

        }
    }
}
