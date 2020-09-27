<?php

namespace App\Http\Controllers;

use App\Helper\CustomController;
use App\Models\Destinasi;
use App\Models\Penginapan;
use FontLib\Table\Type\post;
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
        return DataTables::of(Penginapan::with(['destinasi']))->make(true);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        return view('admin.penginapan.penginapan');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function pageAdd(){
        if($this->request->isMethod('POST')){
            $data = [
               'nama' => $this->postField('namaPenginapan'),
               'tipe' => $this->postField('tipePenginapan'),
               'harga' => $this->postField('hargaPenginapan'),
               'id_destinasi' => $this->postField('destinasi'),
               'deskripsi' => $this->postField('deskripsiPenginapan'),
            ] ;
            $this->insert(Penginapan::class, $data);
            return redirect()->back()->with(['success' => 'success']);

        }
        $data['destinasi'] = Destinasi::all();
        return view('admin.penginapan.tambahpenginapan')->with($data);

    }

    /**
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id){
        $data['penginapan'] = Penginapan::with(['destinasi'])->where('id',$id)->first();
        $data['destinasi'] = Destinasi::all();
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
}
