<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //

    protected $table = 'gallerys';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function image(){
        return $this->hasMany(Image::class,'id_galery');
    }
}
