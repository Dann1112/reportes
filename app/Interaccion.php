<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Interaccion extends Eloquent{

    protected $connection = 'mongodb';
    protected $collection = 'visitors';
    protected $primaryKey = 'id';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];
}
