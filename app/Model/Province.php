<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'provinces';
    protected $primaryKey = 'id_province';
    public $timestamps = false;

    protected $fillable = [

        'name_th',
        'name_en',

    ];

}