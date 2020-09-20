<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function getImage(){
        return $this->hasMany(Article_to_image::class, 'id');
    }
}
