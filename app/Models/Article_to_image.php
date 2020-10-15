<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article_to_image extends Model
{
    //
    protected $table = 'article_to_images';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function image(){
        return $this->belongsTo(Image::class,'id_image');
    }

}
