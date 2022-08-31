<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;


Class Amphures extends Model
{
    protected $table = 'amphures';
    protected $primaryKey = 'id_amphures';
    public $timestamps = false;

    protected $fillable = [
        'code',
        'name_th',
        'name_en',
        'province_id'

    ];

    
}