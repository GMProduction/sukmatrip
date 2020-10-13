<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Paket_to_image
 * @package App\Models
 */
class Paket_to_image extends Model
{
    //

    protected $table = 'paket_to_images';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function image(){
        return $this->belongsTo(Image::class,'id_image');
    }
}