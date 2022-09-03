<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Amphures extends Model
{
    protected $table = 'amphures';
    protected $primaryKey = 'id_amphures';
    public $timestamps = false;

    protected $fillable = [
        'code',
        'name_th',
        'name_en',
        'province_id',

    ];
    public function getAmphures()
    {
        return $this->hasMany(Amphures::class, 'id_province', 'id_amphures');
    }

}