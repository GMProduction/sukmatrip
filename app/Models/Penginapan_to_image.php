<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penginapan_to_image extends Model
{
    //

    protected $table = 'penginapan_to_images';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function image(){
        return $this->belongsTo(Image::class,'id');
    }
}
