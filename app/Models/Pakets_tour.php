<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pakets_tour
 * @package App\Models
 */
class Pakets_tour extends Model
{
    protected $table = 'pakets_tours';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tours(){
        return $this->belongsTo(Image::class,'id_tours');
    }
}
