<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CountryModel extends Model
{
    //
    protected $table="_Z_country";
    protected $timestamp=false;


    protected $fillable=[
        'iso',
        'name',
        'dname',
        'iso3',
        'position',
        'numcode',
        'phonecode',
        'create',
        'register_by',
        'modified',
        'modified_by'
    ];

    
    
}