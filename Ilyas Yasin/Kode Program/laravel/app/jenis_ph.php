<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jenis_ph extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'jenis_ph';

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
    protected $fillable = ['tanggal', 'jenis_tanaman'];

    
}
