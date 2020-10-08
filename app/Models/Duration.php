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
    public function hotels()
    {
    return $this->hasMany(Hotel::class, 'duration_id', 'id');
    }
}
