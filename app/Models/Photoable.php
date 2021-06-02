<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**

 * @mixin \Eloquent
 */

class Photoable extends Model
{
    use HasFactory;

    protected $table = 'photoable';

    public function photoable()
    {
        return $this->morphTo();
    }
}
