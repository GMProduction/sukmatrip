<?php

namespace App\Http\Controllers;

use App\Helper\CustomController;
use App\Models\Article;
use App\Models\Article_to_image;
use App\Models\Image;
use App\Models\Tour;
use FontLib\Table\Type\post;
use Illuminate\Support\Arr;
use Yajra\DataTables\DataTables;

/**
 * Class ArticleController
 * @package App\Http\Controllers
 */
class ArticleController extends CustomController
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
        return DataTables::of(Article::with(['getImage.image']))->make(true);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        return view('admin.artikel.artikel');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function pageAdd(){
        if ($this->request->isMethod('POST')){
            $image = $this->generateImageName('image');

            $data = [
                'judul' => $this->postField('judulArtikel'),
                'konten' => $this->postField('kontenArtikel')
            ];
            $dataImg = [
                'tipe' => 'article',
                'url' => '/uploads/images/'.$image
            ];
            $artikel = $this->insert(Article::class,$data);
            $imageAr = $this->insert(Image::class, $dataImg);
            $artikleImg = [
                'id_article' => $artikel->id,
                'id_image' => $imageAr->id
            ];
            $this->uploadImageWatermark($image);

            $this->insert(Article_to_image::class,$artikleImg);
            return view('admin.artikel.tambahartikel');
        }
        return view('admin.artikel.tambahartikel');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function pageEdit($id){
        $data['artikel'] = Article::with(['getImage.image'])->where('id',$id)->firstOrFail();
//        return $this->jsonResponse($data['artikel']);

        if ($this->request->isMethod('POST')) {
            $data = [
                'judul' => $this->postField('judulArtikel'),
                'konten' => $this->postField('kontenArtikel')
            ];
            $this->insert(Article::class,$data);

            if($this->request->hasFile('image')){
                $image = $this->generateImageName('image');
                $data  = Arr::add($data, 'images', $image);
                $dataImg = [
                    'url' => '/uploads/images/'.$image
                ];
                $this->uploadImageWatermark($image);
                foreach ($data['artikel']->getImage as $img){
                    unlink($img->image->url);
                }
                $this->insert(Image::class, $dataImg);
            }
            return view('admin.artikel.editartikel')->with($data);
        }

        return view('admin.artikel.editartikel')->with($data);
    }
}
