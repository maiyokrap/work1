<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Amphures extends Model
{
    protected $table = 'amphures';
    protected $primaryKey = 'id_amphures';
    public $timestamps = false;

    protected $fillable = [
        'zipcode',
        'name_th',
        'name_en',
        'id_provivce',

    ];
    

}