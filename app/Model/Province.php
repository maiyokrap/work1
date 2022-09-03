<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'provinces';
    protected $primaryKey = 'id_province';
    public $timestamps = false;

    protected $fillable = [
        'code',
        'name_th',
        'name_en',
        'geography_id',

    ];
    public function getAmphures()
    {
        return $this->hasMany(Amphures::class, 'id_amphures', 'id_province');
    }

}