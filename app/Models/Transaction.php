<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    public function tour()
    {
        return $this->belongsToMany(Tour::class, 'transactions_tours');
    }
}
