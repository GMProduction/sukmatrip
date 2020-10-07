<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tour
 * @package App\Models
 */
class Tour extends Model
{
    //
    protected $table = 'tours';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paket(){
        return $this->hasMany(Paket::class, 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function destinasi(){
        return $this->belongsTo(Destinasi::class,'id_destinasi');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function getImage(){
        return $this->hasMany(Tour_to_image::class, 'id_tour');
    }
}
