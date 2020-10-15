<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tour()
    {
        return $this->belongsToMany(Tour::class, 'transactions_tours');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function paket(){
        return $this->belongsTo(Paket::class, 'id_paket');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function penginapan(){
        return $this->belongsTo(Penginapan::class, 'id_penginapan');
    }
}
