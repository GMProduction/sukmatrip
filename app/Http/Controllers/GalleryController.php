<?php

namespace App\Http\Controllers;

use App\Helper\CustomController;
use App\Models\Gallery;
use App\Models\Image;
use App\Models\Penginapan;
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
    public function datatable(){
        return DataTables::of(Gallery::with(['image']))->make(true);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        return view('admin.gallery.gallery');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function pageAdd(){
        if ($this->request->isMethod('POST')){
            $image = $this->generateImageName('image');
            $data = [
                'judul' => $this->postField('namaGallery')
            ];
            $galery = $this->insert(Gallery::class, $data);

            $dataImage = [
                'id_galery' => $galery->id,
                'url' => '/uploads/images/'.$image
            ];

            $this->uploadImageWatermark($image);
            $this->insert(Image::class, $dataImage);
            return view('admin.gallery.tambahgallery');

        }
        return view('admin.gallery.tambahgallery');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function pageEdit($id){
        $data['gallery'] = Gallery::with(['image'])->where('id','=',$id)->first();
        return view('admin.gallery.editGallery')->with($data);
    }


}
