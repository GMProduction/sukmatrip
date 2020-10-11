<?php

namespace App\Http\Controllers;

use App\Helper\CustomController;
use App\Models\Destinasi;
use Yajra\DataTables\Contracts\DataTable;
use Yajra\DataTables\DataTables;

class DestinasiController extends CustomController
{
    public function __construct()
    {
        parent::__construct();

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function index()
    {
        if ($this->request->isMethod('POST')) {
            $data = [
                'nama' => $this->postField('namaDestinasi'),
            ];
            if($this->request->get('action') == 'edit'){
                $this->update(Destinasi::class, $data);
            }else{
                $this->insert(Destinasi::class, $data);
            }
            return redirect()->back()->with(['success' => 'success']);
        }
        return view('admin.destinasi.destinasi');
    }

    /**
     * @return mixed
     * @throws \Exception
     */
    public function datatable()
    {
        return DataTables::of(Destinasi::all())->make(true);
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete($id)
    {
        try {
            Destinasi::destroy($id);

            return $this->jsonResponse('success', 200);
        } catch (\Exception $er) {
            return $this->jsonResponse('error '.$er, 500);

        }
    }

}
