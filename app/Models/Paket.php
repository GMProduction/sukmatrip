<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Paket
 * @package App\Models
 */
class Paket extends Model
{
    //

    protected $table = 'pakets';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transaksi(){
        return $this->hasMany(Transaction::class, 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tour(){
        return $this->belongsTo(Tour::class, 'id_tour');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function penginapan(){
        return $this->belongsTo(Penginapan::class, 'id_penginapan');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function getImage(){
        return $this->hasMany(Paket_to_image::class, 'id');
    }

    public function paketTour(){
        return $this->belongsToMany(Tour::class, 'pakets_tours');
    }
}
