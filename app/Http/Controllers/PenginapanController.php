<?php

namespace App\Http\Controllers;

use App\Helper\CustomController;
use App\Models\Destinasi;
use App\Models\Duration;
use App\Models\Image;
use App\Models\Penginapan;
use App\Models\Penginapan_to_image;
use FontLib\Table\Type\post;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class PenginapanController extends CustomController
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
        return DataTables::of(Penginapan::with(['destinasi', 'duration']))->make(true);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.penginapan.penginapan');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function pageAdd()
    {
        if ($this->request->isMethod('POST')) {
            $data       = [
                'nama'         => $this->postField('namaPenginapan'),
                'tipe'         => $this->postField('tipePenginapan'),
                'harga'        => str_replace(',', '', $this->postField('hargaPenginapan')),
                'id_destinasi' => $this->postField('destinasi'),
                'deskripsi'    => $this->postField('deskripsiPenginapan'),
                'duration_id'  => $this->postField('durasi'),
            ];
            $penginapan = $this->insert(Penginapan::class, $data);

            return view('admin.penginapan.addimage')->with(['id' => $penginapan->id]);

        }
        $data['durasi']    = Duration::all();
        $data['destinasi'] = Destinasi::all();

        return view('admin.penginapan.tambahpenginapan')->with($data);

    }

    /**
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function edit($id)
    {
        if ($this->request->isMethod('POST')) {
            $data = [
                'nama'         => $this->postField('namaPenginapan'),
                'tipe'         => $this->postField('tipePenginapan'),
                'harga'        => $this->postField('hargaPenginapan'),
                'id_destinasi' => $this->postField('destinasi'),
                'deskripsi'    => $this->postField('deskripsiPenginapan'),
                'duration_id'  => $this->postField('durasi'),

            ];
            $this->update(Penginapan::class, $data);

            return redirect()->back()->with(['success' => 'success']);

        }
        $data['penginapan'] = Penginapan::with(['destinasi','getImage.image'])->where('id', $id)->first();
        $data['destinasi']  = Destinasi::all();
//        return  $this->jsonResponse($data['penginapan']);

//        return $this->jsonResponse($data);
        return view('admin.penginapan.editpenginapan')->with($data);
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete($id)
    {
        try {
            Penginapan::destroy($id);

            return $this->jsonResponse('success', 200);
        } catch (\Exception $er) {
            return $this->jsonResponse('error '.$er, 500);

        }
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function uploadImg()
    {
        try {
            if($this->request->get('request') == 2){
                $img = $this->request->get('name');
                $idImg = $this->request->get('idImg');
                DB::delete('delete from penginapan_to_images where id_image = ?',[$idImg]);
                Image::destroy($idImg);
                unlink('../public'.$img);
                $respon =  'Success';
            }else{
                $image     = $this->generateImageName('file');
                $dataImage = [
                    'tipe' => 'penginapan',
                    'url'  => '/uploads/images/'.$image,
                ];

//            $this->uploadImage('file',$image,'images');
                $this->uploadImageWatermark($image,'file');
                $img = $this->insert(Image::class, $dataImage);

                $data = [
                    'id_penginapan' => $this->postField('idPenginapan'),
                    'id_image' => $img->id
                ];

                $this->insert(Penginapan_to_image::class, $data);
                $respon =  [
                  'image' => $img['url'],
                  'id' => $img['id']
                ];
            }


            return $this->jsonResponse($respon, 200);
        } catch (\Exception $er) {
            return $this->jsonResponse('error '.$er->getMessage(), 500);

        }
    }
}
