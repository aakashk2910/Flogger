<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fileentry extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'fileentries';

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
    protected $fillable = ['userid', 'type', 'filename', 'mime', 'originalfilename'];

    
}
