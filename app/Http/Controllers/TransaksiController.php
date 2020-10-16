<?php

namespace App\Http\Controllers;

use App\Helper\CustomController;
use App\Models\Tour;
use App\Models\Transaction;
use Yajra\DataTables\DataTables;

class TransaksiController extends CustomController
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
        return DataTables::of(Transaction::with(['paket','penginapan.duration','tour']))->make(true);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.transaksi.transaksi');
    }

}
