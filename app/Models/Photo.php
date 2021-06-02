<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**

 * @mixin \Eloquent
 */
class Photo extends Model
{
    use HasFactory;

protected $table = 'photos';

protected $fillable = ['file_name'];


}
