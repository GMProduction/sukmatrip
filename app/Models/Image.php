<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Image
 * @package App\Models
 */
class Image extends Model
{
    //

    protected $table = 'images';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function gallery(){
        return $this->belongsTo(Gallery::class, 'id_gallery');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function penginapan(){
        return $this->hasMany(Penginapan_to_image::class,'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tour(){
        return $this->hasMany(Tour_to_image::class,'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paket(){
        return $this->hasMany(Paket_to_image::class,'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function article(){
        return $this->hasMany(Article_to_image::class,'id');
    }
}
