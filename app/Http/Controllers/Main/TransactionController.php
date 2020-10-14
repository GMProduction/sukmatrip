<?php

namespace App\Http\Controllers\Main;

use App\Helper\CustomController;
use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends CustomController
{
    //
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function saveTransaction()
    {
        DB::beginTransaction();
        try {
            $tempCheckIn = explode('/', $this->postField('check_in'));
            $checkIn = $tempCheckIn[2] . '-' . $tempCheckIn[1] . '-' . $tempCheckIn[0];
            $data = [
                'pemesan' => $this->postField('pemesan'),
                'qty' => $this->postField('qty'),
                'phone' => '0',
                'deskripsi' => '',
                'type' => 'penginapan',
                'id_penginapan' => $this->postField('id'),
                'check_in' => Carbon::parse($checkIn)->format('Y-m-d'),
                'harga' => $this->postField('harga'),
            ];
            $tour = $this->postField('tour') ?? [];
            if(count($tour) <= 0){
                return $this->jsonResponse('Anda Belum Memilih Tour!', 202);
            }
            /** @var Transaction $transaction */
            $transaction = $this->insert(Transaction::class, $data);
            $transaction->tour()->attach($tour);
            DB::commit();
            return $this->jsonResponse($tour, 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return $this->jsonResponse('failed ' . $e, 500);
        }
    }
}
