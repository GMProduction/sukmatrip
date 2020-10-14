<?php

namespace App\Http\Controllers;

use App\Helper\CustomController;
use App\Models\Duration;
use App\Models\Gallery;
use Yajra\DataTables\DataTables;

class DurasiController extends CustomController
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
        return DataTables::of(Duration::all())->make(true);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        return view('admin.durasi.durasi');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function pageAdd(){
        if ($this->request->isMethod('POST')){
            $data = [
                'name' => $this->postField('namaDurasi'),
                'duration' => $this->postField('durasi'),
                'qty_trip' => $this->postField('qty_trip'),
            ];
            $this->insert(Duration::class, $data);
            return redirect()->back()->with(['success' => 'success']);

        }
        return view('admin.durasi.tambahdurasi');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function pageEdit($id){
        if ($this->request->isMethod('POST')){
            $data = [
                'name' => $this->postField('namaDurasi'),
                'duration' => $this->postField('durasi'),
                'qty_trip' => $this->postField('qty_trip'),
            ];
            $this->update(Duration::class, $data);
            return redirect()->back()->with(['success' => 'success']);

        }
        $data['durasi'] = Duration::all()->where('id','=',$id)->first();
        return view('admin.durasi.editdurasi')->with($data);
    }


    /**
     * @param $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete($id)
    {
        try {
            Duration::destroy($id);

            return $this->jsonResponse('success', 200);
        } catch (\Exception $er) {
            return $this->jsonResponse('error '.$er, 500);

        }
    }

}
