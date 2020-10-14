<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tour_to_image
 * @package App\Models
 */
class Tour_to_image extends Model
{
    //
    protected $table = 'tour_to_images';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function image(){
        return $this->belongsTo(Image::class,'id_image');
    }
}
