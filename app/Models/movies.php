<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movies extends Model
{
    use HasFactory;

    /**
     * @var mixed
     */
    /**
     * @var mixed
     */

    protected $fillable = [ 'movie_name','movie_description', 'movie_gener','movie_image'];

    // All fields inside $fillable array can be mass-assigned
    /**
     * @var mixed
     */


}
