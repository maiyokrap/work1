<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;


Class Province extends Model
{
    protected $table = 'provinces';
    protected $primaryKey = 'id_province';
    public $timestamps = false;

    protected $fillable = [
        'code',
        'name_th',
        'name_en',
        'geography_id'

    ];

    
}