<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Destinasi
 * @package App\Models
 */
class Destinasi extends Model
{
    //
    protected $table = 'destinasis';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function penginapan()
    {
        return $this->hasMany(Penginapan::class, 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tour()
    {
        return $this->hasMany(Tour::class, 'id');
    }

}
