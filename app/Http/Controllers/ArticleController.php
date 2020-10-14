<?php

namespace App\Http\Controllers;

use App\Helper\CustomController;
use App\Models\Article;
use App\Models\Article_to_image;
use App\Models\Image;
use App\Models\Tour;
use FontLib\Table\Type\post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\JsonResponse|\Illuminate\View\View
     */
    public function pageAdd(){
        if ($this->request->isMethod('POST')){
            try {
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

                return $this->jsonResponse('success', 200);
            } catch (\Exception $er) {
                return $this->jsonResponse('error '.$er->getMessage(), 500);

            }
        }
        return view('admin.artikel.tambahartikel');
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\JsonResponse|\Illuminate\View\View
     */
    public function pageEdit($id){
        $data['artikel'] = Article::with(['getImage.image'])->where('id',$id)->firstOrFail();
//        return $this->jsonResponse($data['artikel']);
$imgAr = $data['artikel']->getImage;
        if ($this->request->isMethod('POST')) {
            try {
                $data = [
                    'judul' => $this->postField('judulArtikel'),
                    'konten' => $this->postField('kontenArtikel')
                ];
                $this->update(Article::class,$data);

                if($this->request->hasFile('image')){
                    $image = $this->generateImageName('image');
                    $data  = Arr::add($data, 'images', $image);
                    $dataImg = [
                        'id'  => $this->postField('idImg'),
                        'url' => '/uploads/images/'.$image
                    ];
                    $this->uploadImageWatermark($image);
                    foreach ( $imgAr as $img){
                        unlink('../public'.$img->image->url);
                    }
                    $this->updateOther(Image::class, $dataImg);
                }
                return $this->jsonResponse('success', 200);

            } catch (\Exception $er) {
                return $this->jsonResponse('error '.$er->getMessage(), 500);

            }
        }

        return view('admin.artikel.editartikel')->with($data);
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete($id)
    {
        try {
            DB::delete('delete from article_to_images where id_article = ?', [$id]);
            Article::destroy($id);

            return $this->jsonResponse('success', 200);
        } catch (\Exception $er) {
            return $this->jsonResponse('error '.$er->getMessage(), 500);

        }
    }
}
