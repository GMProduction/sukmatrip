<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Duration
 * @package App\Models
 */
class Duration extends Model
{
    //
    public function penginapan()
    {
    return $this->hasMany(Penginapan::class, 'duration_id', 'id');
    }
}
