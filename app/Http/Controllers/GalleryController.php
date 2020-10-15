<?php

namespace App\Http\Controllers;

use App\Helper\CustomController;
use App\Models\Gallery;
use App\Models\Image;
use App\Models\Penginapan;
use Illuminate\Support\Arr;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Yajra\DataTables\DataTables;

class GalleryController extends CustomController
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
        return DataTables::of(Gallery::with(['image']))->make(true);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.gallery.gallery');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\JsonResponse|\Illuminate\View\View
     */
    public function pageAdd()
    {
        if ($this->request->isMethod('POST')) {
            try {


                $image  = $this->generateImageName('image');
                $data   = [
                    'judul' => $this->postField('namaGallery'),
                ];
                $galery = $this->insert(Gallery::class, $data);

                $dataImage = [
                    'id_galery' => $galery->id,
                    'url'       => '/uploads/images/'.$image,
                ];

                $this->uploadImageWatermark($image);
                $this->insert(Image::class, $dataImage);

                return $this->jsonResponse('success', 200);
            } catch (\Exception $er) {
                return $this->jsonResponse('error '.$er, 500);

            }

        }

        return view('admin.gallery.tambahgallery');

    }

    /**
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\JsonResponse|\Illuminate\View\View
     */
    public function pageEdit($id)
    {
        $data['gallery'] = Gallery::with(['image'])->where('id', '=', $id)->first();
        $img = $data['gallery']->image[0]->url;
        if ($this->request->isMethod('POST')) {
            try {
                $data   = [
                    'judul' => $this->postField('namaGallery'),
                ];
                $galery = $this->update(Gallery::class, $data);

                $image = $this->generateImageName('image');

                if ($image) {
                    $dataImage = [
                        'id'  => $this->postField('idImg'),
                        'url' => '/uploads/images/'.$image,
                    ];
                    $this->uploadImageWatermark($image);
                    if (file_exists('../public'.$img)) {
                        unlink('../public'.$img);
                    }

                    $this->updateOther(Image::class, $dataImage);

                }

                return $this->jsonResponse('success', 200);

            } catch (\Exception $er) {
                return $this->jsonResponse('error '.$er->getMessage(), 500);

            }

        }

        return view('admin.gallery.editGallery')->with($data);
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete($id)
    {
        try {
            Gallery::destroy($id);

            return $this->jsonResponse('success', 200);
        } catch (\Exception $er) {
            return $this->jsonResponse('error '.$er, 500);

        }
    }

}
