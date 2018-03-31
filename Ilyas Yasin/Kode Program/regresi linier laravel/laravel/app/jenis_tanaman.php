<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jenis_tanaman extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'jenis_tanaman';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['jenis_tanaman', 'jmlh_ppm'];

    
}
