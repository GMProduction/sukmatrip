<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Penginapan
 * @package App\Models
 */
class Penginapan extends Model
{
    //
    protected $table = 'penginapans';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function destinasi(){
        return $this->belongsTo(Destinasi::class, 'id_destinasi');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function getImage(){
        return $this->hasMany(Penginapan_to_image::class, 'id');
    }
}
